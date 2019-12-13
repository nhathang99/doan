<?php

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['MyAuth']], function () {
    Route::prefix('admin')->group(function () {
        route::get('', function () {
            return view('admin');
        });
        route::get('/khachhang', function () {
            $data = DB::table('product')
                ->join('category', 'product.CategoryID', '=', 'category.id')
                ->select('product.*', 'category.CategoryName')
                ->get();
        
            return view('khachhang', ['data' => $data]);
        
        });
    });
 });

Route::get('/chitiet', function () {
    return view('chitiet');
});

Route::get('/home', function () {

    // sửa lại số sản phẩm muốn hiển thị trong 1 trang trong hàm simplePaginate khi đã có nhiều data
    $data = DB::table('product')->simplePaginate(2);

    return view('home', ['data' => $data]);
});

Route::get('/detail/{id}', function ($id) {
    $data = DB::table('product')->where('id', '=', $id)->get();
    //dd($data);
    return view('chitiet', ['data' => $data]);
});



Route::get('/sanpham', function () {
    $data = DB::table('product')
        ->join('category', 'product.CategoryID', '=', 'category.id')
        ->select('product.*', 'category.CategoryName')
        ->get();

    return view('khachhang', ['data' => $data]);

});

route::get('/themsp', function () {
    $data = DB::table('Category')->get();

    return view('themsp', ['data' => $data]);
});
route::get('/xemthem', function () {
    return view('/xemthem');

});
route::get('/giohang', function () {
    return view('/giohang');
});

Route::get('/xemthem/{id}', function ($id) {
    $data = DB::table('product')->where('id', '=', $id)->get();
    // dd($data);
    return view('xemthem', ['data' => $data]);
});

/**
 * homepage
 */
Route::get('/category/{categoryID}','HomeController@renderProductByCategory');

Route::get('/login',function(){
    return view('login');
});
Route::post('/loginAdmin','AuthController@login');