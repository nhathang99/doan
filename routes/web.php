<?php

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/**
 * adminpage
 */
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

Route::get('/sanpham', function () {
    $data = DB::table('product')
        ->join('category', 'product.CategoryID', '=', 'category.id')
        ->select('product.*', 'category.CategoryName')
        ->get();

    return view('sanpham', ['data' => $data]);

});

route::get('/themsp', function () {
    $data = DB::table('Category')->get();

    return view('themsp', ['data' => $data]);
});
route::get('/xemthem', function () {
    return view('/xemthem');

});


Route::get('/xemthem/{id}', function ($id) {
    $data = DB::table('product')->where('id', '=', $id)->get();
    // dd($data);
    return view('xemthem', ['data' => $data]);
});

/**
 * homepage
 */
Route::get('/', function () {

    // sửa lại số sản phẩm muốn hiển thị trong 1 trang trong hàm simplePaginate khi đã có nhiều data
    $data = DB::table('product')->simplePaginate(2);

    return view('home', ['data' => $data]);
});

Route::get('/category/{categoryID}','HomeController@renderProductByCategory');

Route::get('/login',function(){
    return view('login');
});
Route::post('/loginAdmin','AuthController@login');
/**
 * shopping cart
 */
Route::post('/cart', 'CartController@add');
route::post('/sendcart','CartController@sendCart');

Route::get('/increaseCartItem/{id}', 'CartController@increaseCartItem');
Route::get('/decreaseCartItem/{id}', 'CartController@decreaseCartItem');
Route::get('/cartItem/{id}','CartController@getItemInfo');
Route::get('/detail/{id}','HomeController@renderDetailProduct');
route::get('/giohang','CartController@checkout');
Route::get('/removeItem/{rowID}', 'CartController@removeItem');

/**
 * comment
 */
Route::post('/comment/{id}', 'ProductController@postComment');
Route::get('/comment/{productID}', 'ProductController@getCommentByProduct');