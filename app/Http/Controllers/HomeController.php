<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use App\Models\Page;
use App\Models\CategoryBlog;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Admin\HelperController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TrainerController;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Models\ClassInfo;

use GuzzleHttp\Client;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendProductMail;

use App\Helpers\Charactor;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\Hash;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

use App\Http\Requests\TrainerRequest;

class HomeController extends Controller {
    public static function home(Request $request, $language = 'vi'){
        /* ngôn ngữ */
        SettingController::settingLanguage($language);
        /* cache HTML */
        $nameCache              = $language.'home.'.config('main_'.env('APP_NAME').'.cache.extension');
        $pathCache              = Storage::path(config('main_'.env('APP_NAME').'.cache.folderSave')).$nameCache;
        $cacheTime    	        = env('APP_CACHE_TIME') ?? 1800;
        if(file_exists($pathCache)&&$cacheTime>(time() - filectime($pathCache))){
            $xhtml              = file_get_contents($pathCache);
        }else {
            $item               = Page::select('*')
                ->whereHas('seos.infoSeo', function ($query) use ($language) {
                    $query->where('slug', $language);
                })
                ->with('seo', 'seos.infoSeo', 'type')
                ->first();
            /* lấy item seo theo ngôn ngữ được chọn */
            $itemSeo            = [];
            if (!empty($item->seos)) {
                foreach ($item->seos as $seo) {
                    if (!empty($seo->infoSeo->language) && $seo->infoSeo->language==$language) {
                        $itemSeo = $seo->infoSeo;
                        break;
                    }
                }
            }
            /* lấy thông tin cho menu */
            $categoriesBlog = CategoryBlog::select('*')
                                ->where('flag_show', 1)
                                ->get();
            $categoriesLv2  = Category::select('*')
                                ->whereHas('seos.infoSeo', function($query) use($language){
                                    $query->where('level', 2)
                                                ->where('language', $language);
                                })
                                ->get();
            /* giải đấu */
            $events         = Blog::select('*')
                                ->whereHas('categories.infoCategory.seos.infoSeo', function($query){
                                    $query->where('slug', 'giai-dau');
                                })
                                ->orderBy('id', 'DESC')
                                ->skip(0)
                                ->take(3)
                                ->get();
            /* blogs */
            $blogs          = Blog::select('*')
                                ->whereHas('categories.infoCategory.seos.infoSeo', function($query){
                                    $query->where('slug', 'tin-tuc');
                                })
                                ->orderBy('id', 'DESC')
                                ->skip(0)
                                ->take(3)
                                ->get();
            /* sản phẩm mẫu */
            $products       = Product::select('*')
                                ->whereHas('seos.infoSeo', function($query) use($language){
                                    $query->where('language', $language);
                                })
                                ->orderBy('id', 'DESC')
                                ->with('seo', 'seos', 'prices')
                                ->skip(0)
                                ->take('8')
                                ->get();
            $xhtml          = view('wallpaper.home.index', compact('item', 'itemSeo', 'language', 'categoriesBlog', 'categoriesLv2', 'blogs', 'events', 'products'))->render();
            /* Ghi dữ liệu - Xuất kết quả */
            if(env('APP_CACHE_HTML')==true) Storage::put(config('main_'.env('APP_NAME').'.cache.folderSave').$nameCache, $xhtml);
        }
        echo $xhtml;
    }

    public static function test(Request $request){
        $string = 'Trần Tiến Đat';

        $convert = \App\Helpers\Charactor::convertStrToUrl($string);
        
        dd($convert);
    }

    private static function normalizeUnicode($string) {
        return \Normalizer::normalize($string, \Normalizer::FORM_C);
    }

    public static function callAPIClaudeAI(Request $request){

        // Cấu hình Guzzle client
        $client = new Client();

        // Lấy API key từ .env
        $apiKey = env('CLAUDE_AI_API_KEY');

        // Dữ liệu bạn muốn gửi đến Claude AI API
        $data = [
            'model' => 'claude-3-5-sonnet-20241022',
            'max_tokens' => 1024,
            'messages' => [
                ['role' => 'user', 'content' => '1 + 1 bằng mấy'], 
            ],
        ];

        // Gửi yêu cầu POST đến Claude AI API
        $response = $client->post('https://api.anthropic.com/v1/messages', [
            'headers' => [
                'x-api-key' => $apiKey,
                'anthropic-version' => '2023-06-01',
                'content-type' => 'application/json',
            ],
            'json' => $data,
        ]);

        // Trả về kết quả từ API dưới dạng JSON
        $result = response()->json(json_decode($response->getBody()->getContents(), true));

        dd($result);
        
    }

    public static function qrcode(Request $request){
        // Đường dẫn file trong thư mục storage
        $filePath = Storage::path('public/danh-sach-vdv.xlsx'); // Thay "your-folder" bằng tên thư mục trong storage

        // Đọc file Excel và chuyển thành mảng
        $data = Excel::toArray([], $filePath);

        // Giả sử dữ liệu nằm trong sheet đầu tiên
        $sheet = $data[0];

        // Bỏ qua dòng tiêu đề (nếu có) và chuyển thành mảng huấn luyện viên
        $trainers = [];
        foreach ($sheet as $index => $row) {
            if ($index === 0) continue; // Bỏ qua tiêu đề
            $brithDay   = $row[2] ?? '';
            $tmp        = explode('/', $brithDay);
            $brithDay   = end($tmp);
            $slug       = Charactor::convertStrToUrl(strtolower($row[1]));
            $trainers[] = [
                'name'      => $row[1] ?? '',
                'birth_day' => $brithDay, 
                'phone'     => $row[3] ?? '',   
                'email'     => $row[4] ?? '',
                'link'      => env('APP_URL').'/van-dong-vien/'.$slug,
            ];
        }

        for ($i = 0; $i < count($trainers); $i++) {
            $qrLink = $trainers[$i]['link'];
        
            $qrCode = QrCode::encoding('UTF-8')
                ->format('svg')
                ->size(300)
                ->margin(1)
                ->backgroundColor(255, 255, 255)
                ->style('round')
                ->eye('circle')
                ->generate($qrLink);
        
            $trainers[$i]['qrCode'] = "data:image/svg+xml;base64," . base64_encode($qrCode);
        }

        // Trả dữ liệu ra view
        return view('wallpaper.qrcode.index', compact('trainers'));
    }

    private static function findUniqueElements($arr1, $arr2) {
        // Lọc các phần tử có trong arr1 nhưng không có trong arr2 và ngược lại
        $uniqueInArr1 = array_diff($arr1, $arr2);
        $uniqueInArr2 = array_diff($arr2, $arr1);
        
        // Kết hợp các phần tử không trùng
        return array_merge($uniqueInArr1, $uniqueInArr2);
    }
}