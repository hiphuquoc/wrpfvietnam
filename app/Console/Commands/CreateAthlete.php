<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use PhpOffice\PhpSpreadsheet\IOFactory;

use App\Http\Requests\TrainerRequest;
use Illuminate\Support\Facades\Storage;
use App\Helpers\Charactor;
use App\Models\ClassInfo;
use App\Http\Controllers\Admin\TrainerController;

class CreateAthlete extends Command {
    protected $signature = 'athlete:create';

    protected $description = 'Command description';

    public function handle(){
        // Đường dẫn file trong thư mục storage
        $filePath = Storage::path('public/danh-sach-vdv.xlsx'); // Thay "your-folder" bằng tên thư mục trong storage

        // Load file Excel bằng PhpSpreadsheet
        $spreadsheet = IOFactory::load($filePath);
        $worksheet = $spreadsheet->getActiveSheet();

        $trainers = [];

        // Bỏ qua dòng tiêu đề (nếu có) và chuyển thành mảng huấn luyện viên
        $trainers = [];
        foreach ($worksheet->getRowIterator() as $rowIndex => $row) {
            if ($rowIndex === 1) continue; // Bỏ qua dòng tiêu đề (Excel đếm từ 1)
        
            $cells = [];
            foreach ($row->getCellIterator() as $cell) {
                $cells[] = $cell->getCalculatedValue(); // ✅ Lấy giá trị đã tính toán
            }
        
            $brithDay   = $cells[2] ?? '';
            $tmp        = explode('/', $brithDay);
            $brithDay   = end($tmp);
            $slug       = Charactor::convertStrToUrl(strtolower($cells[1]));
        
            $trainers[] = [
                'name'          => ucwords($cells[1]) ?? '',
                'birth_day'     => $brithDay, 
                'phone'         => $cells[3] ?? '',   
                'email'         => $cells[4] ?? '',
                'address'       => $cells[5] ?? '',
                'sex'           => $cells[7] ?? '', // ✅ Lấy được giá trị thay vì công thức
                'class_name'    => $cells[9] ?? '', // ✅ Lấy được giá trị thay vì công thức
                'link'          => env('APP_URL').'/van-dong-vien/'.$slug,
            ];
        }

        $count          = 0;
        foreach($trainers as $trainer){
            // insert dữ liệu
            $seoTitle   = "Vận động viên ".$trainer['name']." dữ liệu từ WRPF Việt Nam | WRPFVietnam.com";
            $infoClass  = ClassInfo::select('*')
                            ->where('name', 'LIKE', $trainer['class_name'].'%')
                            ->first();
            $slug       = \App\Helpers\Charactor::convertStrToUrl($trainer['name']);
            $data = [
                "seo_id" => "72668",
                "seo_id_vi" => "0",
                "trainer_info_id" => "0",
                "language" => "vi",
                "type" => "copy",
                "start_pwl" => "2015",
                "team" => "Tự do",
                "parent" => "72665",
                "rating_aggregate_count" => "8452",
                "rating_aggregate_star" => "4.7",
                /* biến số */
                "title" => $trainer['name'],
                "sex" => $trainer['sex'],
                "birth_day" => $trainer['birth_day'],
                "phone" => $trainer['phone'],
                "email" => $trainer['email'],
                "class_id" => $infoClass->id,
                "seo_title" => $seoTitle,
                "seo_description" => $seoTitle,
                "slug" => $slug,
            ];

            // Tạo request giả lập
            $request = TrainerRequest::create(route('admin.trainer.view'), 'POST', $data);

            // Gán session vào request
            $request->setLaravelSession(session());

            // Gọi controller
            $controller = app(TrainerController::class);
            $flag = $controller->createAndUpdate($request);

            if($flag) ++$count;
        }
        
        $this->info("🎉 Đã tạo {$count} vận động viên thành công!");
    }
}
