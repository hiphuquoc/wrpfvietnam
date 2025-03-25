<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cookie;
// use Illuminate\Support\Facades\Blade;
use App\Helpers\Url;
use App\Http\Controllers\CategoryMoneyController;
use App\Models\Blog;
use App\Models\Category;
// use App\Models\Tag;
// use App\Models\Style;
use App\Models\Trainer;
use App\Models\Page;
use App\Models\CategoryBlog;
use App\Models\Product;
// use App\Models\Seo;
use App\Helpers\GeoIP;
use App\Models\ISO3166;
use Illuminate\Support\Facades\Auth;


class RoutingController extends Controller{
    public function routing(Request $request, $slug, $slug2 = null, $slug3 = null, $slug4 = null, $slug5 = null, $slug6 = null, $slug7 = null, $slug8 = null, $slug9 = null, $slug10 = null){
        /* dùng request uri */
        $slug           = $request->path();
        // Giải mã các ký tự URL-encoded
        $decodedSlug    = urldecode($slug);
        $tmpSlug        = explode('/', $decodedSlug);
        /* loại bỏ phần tử rỗng */
        $arraySlug      = [];
        foreach($tmpSlug as $slug) if(!empty($slug)&&$slug!='public') $arraySlug[] = $slug;
        /* loại bỏ hashtag và request trước khi check */
        $arraySlug[count($arraySlug)-1] = preg_replace('#([\?|\#]+).*$#imsU', '', end($arraySlug));
        $urlRequest     = implode('/', $arraySlug);
        /* check url có tồn tại? => lấy thông tin */
        $itemSeo    = Url::checkUrlExists(end($arraySlug));
        /* nếu sai => redirect về link đúng */
        if(!empty($itemSeo->slug_full)&&$itemSeo->slug_full!=$urlRequest){
            /* ko rút gọn trên 1 dòng được => lỗi */
            return Redirect::to($itemSeo->slug_full, 301);
        }
        /* ============== nếu đúng => xuất dữ liệu */
        if(!empty($itemSeo->type)){
            /* ngôn ngữ */
            $language               = $itemSeo->language;
            SettingController::settingLanguage($language);

            // dd(session()->all());
            /* thiết lập theo IP */
            if(empty(session()->get('info_ip'))) SettingController::settingIpVisitor();
            /* đưa biến search lên để xử lý với cache */
            $search                 = request('search') ?? null;
            /* cache HTML */
            $paramsSlug             = [];
            if(!empty($search)) $paramsSlug['search'] = $search;
            $nameCache              = self::buildNameCache($itemSeo['slug_full'], $paramsSlug).'.'.config('main_'.env('APP_NAME').'.cache.extension');
            $pathCache              = Storage::path(config('main_'.env('APP_NAME').'.cache.folderSave')).$nameCache;
            $cacheTime    	        = env('APP_CACHE_TIME') ?? 1800;
            $flagHandle             = true;
            if(file_exists($pathCache)&&$cacheTime>(time() - filectime($pathCache))){
                $xhtml              = file_get_contents($pathCache);
                if(!empty(env('HTTP_URL'))&&strpos($xhtml, env('HTTP_URL'))==false) $flagHandle = false;
            }
            /* xử lý */
            if($flagHandle==false){
                echo $xhtml;
            }else {
                /* breadcrumb */
                $breadcrumb         = Url::buildBreadcrumb($itemSeo->slug_full);
                /* thông tin */
                $tableName          = $itemSeo->type;
                $modelName          = config('tablemysql.'.$itemSeo->type.'.model_name');
                $modelInstance      = resolve("\App\Models\\$modelName");
                $idSeo              = $itemSeo->id;
                $item               = $modelInstance::select('*')
                                        ->whereHas('seos', function($query) use($idSeo){
                                            $query->where('seo_id', $idSeo);
                                        })
                                        ->with('seo', 'seos')
                                        ->first();
                $flagMatch          = false;
                /* ===== Tag ==== */
                if($itemSeo->type=='tag_info'){
                    $flagMatch      = true;
                    $params         = [];
                    /* key_search */
                    $params['key_search'] = request('search') ?? null;
                    /* tìm theo category */
                    $arrayIdCategory    = []; /* rỗng do đang tìm theo tags */
                    $params['array_category_info_id'] = $arrayIdCategory;
                    /* tìm theo tag */
                    $arrayIdTag         = [$item->id];
                    $params['array_tag_info_id'] = $arrayIdTag;
                    $params['request_load'] = 100;
                    $params['sort_by']  = Cookie::get('sort_by') ?? null;
                    /* lấy thông tin dựa vào params */
                    $response           = CategoryMoneyController::getWallpapers($params, $language);
                    $products           = $response['wallpapers'];
                    // $total              = $response['total'];
                    // $loaded             = $response['loaded'];
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
                    /* xây dựng toc_content */
                    $htmlContent        = '';
                    foreach($itemSeo->contents as $content) $htmlContent .= $content->content;
                    $dataContent        = CategoryMoneyController::buildTocContentMain($htmlContent, $language);
                    $xhtml              = view('wallpaper.categoryMoney.index', compact('item', 'itemSeo', 'breadcrumb', 'products', 'categoriesBlog', 'categoriesLv2', 'language', 'dataContent'))->render();
                }
                /* ===== Sản phẩm ==== */
                if($itemSeo->type=='product_info'){
                    $flagMatch      = true;
                    /* sản phẩm liên quan */
                    $related        = Product::select('*')
                                        ->whereHas('seos.infoSeo', function($query) use($language) {
                                            $query->where('language', $language);
                                        })
                                        ->where('id', '!=', $item->id)
                                        ->orderBy('id', 'DESC')
                                        ->skip(0)
                                        ->take(4)
                                        ->with('seo', 'seos', 'categories', 'tags')
                                        ->get();
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
                    $xhtml          = view('wallpaper.product.index', compact('item', 'itemSeo', 'breadcrumb', 'related', 'categoriesBlog', 'categoriesLv2', 'language'))->render();
                }
                /* ===== Các trang chủ đề/phong cách/sự kiện ==== */
                foreach(config('main_'.env('APP_NAME').'.category_type') as $type){
                    if($itemSeo->type==$type['key']){
                        $flagMatch          = true;
                        $params             = [];
                        $params['request_load'] = 100;
                        /* key_search */
                        $params['search']   = $search;
                        $arrayIdCategory    = Category::getArrayIdCategoryRelatedByIdCategory($item, [$item->id]);
                        $params['array_category_info_id'] = $arrayIdCategory;
                        $params['sort_by']  = Cookie::get('sort_by') ?? null;
                        /* lấy thông tin dựa vào params */
                        $response           = CategoryMoneyController::getWallpapers($params, $language);
                        $products           = $response['wallpapers'];
                        // $total              = $response['total'];
                        // $loaded             = $response['loaded'];
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
                        /* xây dựng toc_content */
                        $htmlContent        = '';
                        foreach($itemSeo->contents as $content) $htmlContent .= $content->content;
                        $dataContent        = CategoryMoneyController::buildTocContentMain($htmlContent, $language);
                        $xhtml              = view('wallpaper.categoryMoney.index', compact('item', 'itemSeo', 'breadcrumb', 'language', 'products', 'categoriesBlog', 'categoriesLv2', 'dataContent'))->render();
                    }
                }
                /* ===== Trang ==== */
                if($itemSeo->type=='page_info'){
                    $flagMatch          = true;
                    $item               = Page::select('*')
                                            ->whereHas('seos.infoSeo', function($query) use($idSeo){
                                                $query->where('id', $idSeo);
                                            })
                                            ->with('type')
                                            ->first();
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
                    if($item->type->code=='ranking'){ /* trang xếp hạng */
                        $xhtml  = view('wallpaper.ranking.index', compact('item', 'itemSeo', 'categoriesBlog', 'categoriesLv2', 'language', 'breadcrumb'))->render(); 
                    }else if($item->type->code=='athlete'){
                        /* danh sách vận động viên */
                        $trainers = Trainer::select('*')
                                        ->with('seo', 'seos')
                                        ->get();
                        $xhtml  = view('wallpaper.athlete.index', compact('item', 'itemSeo', 'categoriesBlog', 'categoriesLv2', 'language', 'trainers', 'breadcrumb'))->render(); 
                    }else { /* trang bình thường */
                        /* xây dựng toc_content */
                        $htmlContent        = '';
                        foreach($itemSeo->contents as $content) $htmlContent .= $content->content;
                        $dataContent        = CategoryMoneyController::buildTocContentMain($htmlContent, $language);
                        $htmlContent        = str_replace('<div id="tocContentMain"></div>', '<div id="tocContentMain">'.$dataContent['toc_content'].'</div>', $dataContent['content']);
                        $xhtml  = view('wallpaper.page.index', compact('item', 'itemSeo', 'categoriesBlog', 'categoriesLv2', 'htmlContent', 'language', 'breadcrumb'))->render();    
                    }
                                   
                }
                /* ===== Category Blog ==== */
                if($itemSeo->type=='category_blog'){
                    $flagMatch          = true;
                    /* thông tin trang category blog */
                    $item               = CategoryBlog::select('*')
                                            ->whereHas('seos.infoSeo', function($query) use($idSeo){
                                                $query->where('id', $idSeo);
                                            })
                                            ->with('seo', 'seos')
                                            ->first();
                    /* tạo mảng để lấy blogs */
                    $params             = [];
                    $params['sort_by']  = Cookie::get('sort_by') ?? null;
                    $categoryTree       = CategoryBlog::getTreeCategoryByInfoCategory($item, []);
                    $arrayIdCategory    = [$item->id];
                    foreach($categoryTree as $t) $arrayIdCategory[] = $t->id;
                    $params['array_category_blog_id'] = $arrayIdCategory;
                    $tmp                = \App\Http\Controllers\CategoryBlogController::getBlogs($params, $language);
                    $blogs              = $tmp['blogs'];
                    // /* lấy danh sách chuyên mục level 2 */
                    // $categoriesLv2      = CategoryBlog::select('*')
                    //                         ->join('seo', 'seo.id', '=', 'category_blog.seo_id')
                    //                         ->whereHas('seos.infoSeo', function ($query) use ($language) {
                    //                             $query->where('language', $language)
                    //                                 ->where('level', 2);
                    //                         })
                    //                         ->with(['seos.infoSeo' => function($query) use ($language) {
                    //                             $query->where('language', $language);
                    //                         }, 'seo', 'seos'])
                    //                         ->orderBy('seo.ordering', 'DESC')
                    //                         ->orderBy('seo.id', 'DESC')
                    //                         ->get();
                    /* blog nổi bật - sidebar */
                    $blogFeatured       = BlogController::getBlogFeatured($language);
                    /* lấy thông tin cho menu */
                    $categoriesBlog     = CategoryBlog::select('*')
                                            ->where('flag_show', 1)
                                            ->get();
                    $categoriesLv2      = Category::select('*')
                                            ->whereHas('seos.infoSeo', function($query) use($language){
                                                $query->where('level', 2)
                                                            ->where('language', $language);
                                            })
                                            ->get();
                    $xhtml              = view('wallpaper.categoryBlog.index', compact('item', 'itemSeo', 'categoriesBlog', 'categoriesLv2', 'blogs', 'blogFeatured', 'language', 'breadcrumb'))->render();
                }
                /* ===== Blog ==== */
                if($itemSeo->type=='blog_info'){
                    $flagMatch          = true;
                    /* thông tin trang category blog */
                    $item               = Blog::select('*')
                                            ->whereHas('seos.infoSeo', function($query) use($idSeo){
                                                $query->where('id', $idSeo);
                                            })
                                            ->with('seo', 'seos.infoSeo.contents')
                                            ->first();
                    /* blog nổi bật - sidebar */
                    $blogFeatured       = BlogController::getBlogFeatured($language);
                    /* blog liên quan */
                    $blogRelated        = Blog::withCount('categories') // Đếm số lượng categories
                                            ->whereHas('seos.infoSeo', function($query) use($language){
                                                $query->where('language', $language);
                                            })
                                            ->whereNot('id', $item->id)
                                            ->orderByDesc('categories_count') // Sắp xếp theo số lượng categories giảm dần
                                            ->with('categories', 'seo', 'seos') // Lấy thông tin danh mục
                                            ->skip(0)
                                            ->take(5)
                                            ->get();
                    /* lấy thông tin cho menu */
                    $categoriesBlog     = CategoryBlog::select('*')
                                            ->where('flag_show', 1)
                                            ->get();
                    $categoriesLv2      = Category::select('*')
                                            ->whereHas('seos.infoSeo', function($query) use($language){
                                                $query->where('level', 2)
                                                    ->where('language', $language);
                                            })
                                            ->get();
                    /* xây dựng toc_content */
                    $htmlContent        = '';
                    foreach($itemSeo->contents as $content) $htmlContent .= $content->content;
                    $dataContent        = CategoryMoneyController::buildTocContentMain($htmlContent, $language);
                    $htmlContent        = str_replace('<div id="tocContentMain"></div>', '<div id="tocContentMain">'.$dataContent['toc_content'].'</div>', $dataContent['content']);
                    $xhtml              = view('wallpaper.blog.index', compact('item', 'itemSeo', 'categoriesBlog', 'categoriesLv2', 'blogFeatured', 'blogRelated', 'language', 'breadcrumb', 'htmlContent'))->render();
                }
                 /* ===== Trainer ==== */
                 if($itemSeo->type=='trainer_info'){
                    $flagMatch          = true;
                    /* thông tin trang */
                    $item               = Trainer::select('*')
                                            ->whereHas('seos.infoSeo', function($query) use($idSeo){
                                                $query->where('id', $idSeo);
                                            })
                                            ->with('seo', 'seos.infoSeo.contents')
                                            ->first();
                    /* lấy thông tin cho menu */
                    $categoriesBlog     = CategoryBlog::select('*')
                                            ->where('flag_show', 1)
                                            ->get();
                    $categoriesLv2      = Category::select('*')
                                            ->whereHas('seos.infoSeo', function($query) use($language){
                                                $query->where('level', 2)
                                                    ->where('language', $language);
                                            })
                                            ->get();
                    $xhtml              = view('wallpaper.teacherDetail.index', compact('item', 'itemSeo', 'categoriesBlog', 'categoriesLv2', 'language', 'breadcrumb'))->render();
                }
                /* Ghi dữ liệu - Xuất kết quả */
                if($flagMatch==true){
                    if(env('APP_CACHE_HTML')==true) Storage::put(config('main_'.env('APP_NAME').'.cache.folderSave').$nameCache, $xhtml);
                    echo $xhtml;
                }else {
                    return \App\Http\Controllers\ErrorController::error404();
                }
            }
            // return false;
        }else {
            return \App\Http\Controllers\ErrorController::error404();
        }
    }

    public static function buildNameCache($slugFull, $params = []){
        $response     = '';
        if(!empty($slugFull)){
             /* xây dựng  slug */
             $tmp    = explode('/', $slugFull);
             $result = [];
             foreach($tmp as $t) if(!empty($t)) $result[] = $t;
             $response = implode('-', $result);
            /* duyệt params để lấy prefix hay # */
            if(!empty($params)){
                $part   = '';
                foreach($params as $key => $param) $part .= $key.'-'.$param;
                if(!empty($part)) $response = $response.'-'.$part;
            }
        }
        return $response;
    }
}
