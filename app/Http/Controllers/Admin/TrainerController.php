<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Helpers\Upload;
// use App\Http\Requests\TrainerRequest as RequestsTrainerRequest;
use App\Models\Trainer;
use App\Models\Seo;
use App\Models\RelationSeoTrainerInfo;
use App\Models\Prompt;
use App\Models\Page;
use App\Models\ClassInfo;
use App\Models\TrainerAchievement;
use App\Models\TrainerExperience;
use App\Models\TrainerExperienceContent;
use App\Models\TrainerSkill;
use App\Models\TrainerDegree;
use App\Models\TrainerDegreeContent;
use App\Services\BuildInsertUpdateModel;
use App\Http\Requests\TrainerRequest;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;

class TrainerController extends Controller {

    public function __construct(BuildInsertUpdateModel $BuildInsertUpdateModel){
        $this->BuildInsertUpdateModel  = $BuildInsertUpdateModel;
    }

    public function list(Request $request){
        $params             = [];
        /* Search theo tên */
        if(!empty($request->get('search_name'))) $params['search_name'] = $request->get('search_name');
        /* paginate */
        $viewPerPage        = Cookie::get('viewTrainerInfo') ?? 50;
        $params['paginate'] = $viewPerPage;
        $list               = Trainer::getList($params);
        return view('admin.trainer.list', compact('list', 'params', 'viewPerPage'));
    }

    public function view(Request $request){
        $message            = $request->get('message') ?? null;
        $id                 = $request->get('id') ?? 0;
        $language           = $request->get('language') ?? 'vi';
        /* kiểm tra xem ngôn ngữ có nằm trong danh sách không */
        $flagView           = false;
        foreach(config('language') as $ld){
            if($ld['key']==$language) {
                $flagView   = true;
                break;
            }
        }
        /* tìm theo ngôn ngữ */
        $item               = Trainer::select('*')
                                ->where('id', $id)
                                ->with('seo.contents', 'seos.infoSeo.contents', 'seos.infoSeo.jobAutoTranslate')
                                ->first();
        if(empty($item)) $flagView = false;
        $slug               = $item->seo->slug ?? '';
        $hasAdminRole = auth()->user()->hasRole('admin');
        if($hasAdminRole || ($flagView == true && $slug == auth()->user()->name)){
            /* lấy item seo theo ngôn ngữ được chọn */
            $itemSeo = [];
            if (!empty($item->seos)) {
                foreach ($item->seos as $s) {
                    if ($s->infoSeo->language == $language) {
                        $itemSeo = $s->infoSeo;
                        break;
                    }
                }
            }
            /* prompts */
            $prompts = Prompt::select('*')
                        ->where('reference_table', 'trainer_info')
                        ->get();
            /* type */
            $type = !empty($itemSeo) ? 'edit' : 'create';
            $type = $request->get('type') ?? $type;
            /* trang cha */
            $parents = Page::all();
            /* thông tin class */
            $classObject    = ClassInfo::all();
            return view('admin.trainer.view', compact('item', 'itemSeo', 'prompts', 'type', 'language', 'parents', 'classObject', 'message'));
        } else {
            return redirect()->route('admin.trainer.list');
        }
    }

    public function createAndUpdate(TrainerRequest $request){
        try {
            DB::beginTransaction();
            /* ngôn ngữ */
            $idSeo              = $request->get('seo_id');
            $idSeoVI            = $request->get('seo_id_vi') ?? 0;
            $idTrainer          = $request->get('trainer_info_id');
            $language           = $request->get('language');
            $typePage           = 'trainer_info';
            $type               = $request->get('type');
            /* check xem là create seo hay update seo */
            $action             = !empty($idSeo)&&$type=='edit' ? 'edit' : 'create';
            /* upload image */
            $dataPath           = [];
            if($request->hasFile('image')) {
                $name           = !empty($request->get('slug')) ? $request->get('slug') : time();
                $fileName       = $name.'.'.config('image.extension');
                $folderUpload   =  config('main_'.env('APP_NAME').'.google_cloud_storage.wallpapers');
                $dataPath       = Upload::uploadWallpaper($request->file('image'), $fileName, $folderUpload);
            }
            /* update page */
            $seo                = $this->BuildInsertUpdateModel->buildArrayTableSeo($request->all(), $typePage, $dataPath);
            if($action=='edit'){
                Seo::updateItem($idSeo, $seo);
            }else {
                $idSeo = Seo::insertItem($seo, $idSeoVI);
            }
            /* kiểm tra insert thành công không */
            if(!empty($idSeo)){
                /* insert hoặc update trainer_info */
                if(empty($idTrainer)){ /* check xem create hay update */
                    $idTrainer  = Trainer::insertItem([
                        'seo_id'        => $idSeo,
                        'sex'           => $request->get('sex'),
                        'birth_day'     => $request->get('birth_day'),
                        'phone'         => $request->get('phone'),
                        'email'         => $request->get('email'),
                        'start_pwl'     => $request->get('start_pwl'),
                        'class_id'      => $request->get('class_id'),
                        'team'          => $request->get('team'),
                    ]);
                }else {
                    $dataTrainer    = [];
                    $dataTrainer['sex'] = $request->get('sex');
                    if(!empty($request->get('birth_day'))) $dataTrainer['birth_day'] = $request->get('birth_day');
                    if(!empty($request->get('phone'))) $dataTrainer['phone'] = $request->get('phone');
                    if(!empty($request->get('email'))) $dataTrainer['email'] = $request->get('email');
                    if(!empty($request->get('start_pwl'))) $dataTrainer['start_pwl'] = $request->get('start_pwl');
                    if(!empty($request->get('class_id'))) $dataTrainer['class_id'] = $request->get('class_id');
                    if(!empty($request->get('team'))) $dataTrainer['team'] = $request->get('team');
                    Trainer::updateItem($idTrainer, $dataTrainer);
                }
                /* relation_seo_trainer_info */
                $relationSeoTrainerInfo = RelationSeoTrainerInfo::select('*')
                                        ->where('seo_id', $idSeo)
                                        ->where('trainer_info_id', $idTrainer)
                                        ->first();
                if(empty($relationSeoTrainerInfo)) RelationSeoTrainerInfo::insertItem([
                    'seo_id'            => $idSeo,
                    'trainer_info_id'   => $idTrainer,
                ]);
                DB::commit();
                /* Message */
                $message        = [
                    'type'      => 'success',
                    'message'   => '<strong>Thành công!</strong> Đã cập nhật Vận động viên!'
                ];
                /* nếu có tùy chọn index => gửi google index */
                if(!empty($request->get('index_google'))&&$request->get('index_google')=='on') {
                    $flagIndex = IndexController::indexUrl($idSeo);
                    if($flagIndex==200){
                        $message['message'] = '<strong>Thành công!</strong> Đã cập nhật Vận động viên và Báo Google Index!';
                    }else {
                        $message['message'] = '<strong>Thành công!</strong> Đã cập nhật Vận động viên <span style="color:red;">nhưng báo Google Index lỗi</span>';
                    }
                }
            }
        } catch (\Exception $exception){
            DB::rollBack();
        }
        /* có lỗi mặc định Message */
        if(empty($message)){
            $message        = [
                'type'      => 'danger',
                'message'   => '<strong>Thất bại!</strong> Có lỗi xảy ra, vui lòng thử lại'
            ];
        }
        $request->session()->put('message', $message);
        return redirect()->route('admin.trainer.view', ['id' => $idTrainer, 'language' => $language]);
    }

    public function createUser(){
        $teachers = Trainer::select('*')->get();
        $count = 0;

        foreach ($teachers as $teacher) {
            $slug = $teacher->seo->slug ?? '';
            $email = str_replace('-', '', $slug);

            $infoUser = User::where('email', $email)->first();

            if (!empty($slug) && empty($infoUser)) {
                $idUser = User::create([
                    'name' => $slug,
                    'email' => $email,
                    'password' => Hash::make($email)
                ]);

                UserRole::insertItem([
                    'user_id' => $idUser->id,
                    'role_id' => 2,
                ]);

                if ($idUser) ++$count;
            }
        }

        return response()->json([
            'status' => true,
            'message' => '👋 Đã tạo thành công <span class="highLight_500">' . $count . '</span> tài khoản HLV mới.',
            'count' => $count,
        ]);
    }

    public function delete(Request $request){
        if(!empty($request->get('id'))){
            try {
                DB::beginTransaction();
                $id         = $request->get('id');
                $info       = Trainer::select('*')
                                ->where('id', $id)
                                ->with('seo', 'seos')
                                ->first();
                /* xóa ảnh đại diện trên google_clouds */ 
                if(!empty($info->seo->image)) Upload::deleteWallpaper($info->seo->image);
                /* delete relation */
                $info->achievements()->delete();
                $info->skills()->delete();
                // $info->experiences()->contents()->delete();
                foreach($info->experiences as $e){
                    $e->contents()->delete();
                }
                $info->experiences()->delete();
                // $info->degrees()->contents()->delete();
                foreach($info->degrees as $d){
                    $d->contents()->delete();
                }
                $info->degrees()->delete();
                /* delete các trang seos ngôn ngữ */
                foreach($info->seos as $s){
                    /* xóa ảnh đại diện trên google_clouds */ 
                    if(!empty($s->infoSeo->image)) Upload::deleteWallpaper($s->infoSeo->image);
                    if(!empty($s->infoSeo->contents)) foreach($s->infoSeo->contents as $c) $c->delete();
                    $s->infoSeo()->delete();
                    $s->delete();
                }
                /* Xóa user tương ứng */
                $slug = $info->seo->slug ?? null;
                if (!empty($slug)) {
                    $email = str_replace('-', '', $slug);
                    $user = User::where('email', $email)->first();
                    
                    if (!empty($user)) {
                        // Xóa tất cả vai trò của user
                        UserRole::where('user_id', $user->id)->delete();
                        // Xóa user
                        $user->delete();
                    }
                }

                $info->delete();
                DB::commit();
                return true;
            } catch (\Exception $exception){
                DB::rollBack();
                return false;
            }
        }
    }
}
