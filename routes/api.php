<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::delete('delete/product/{id}', function ($id) {
    DB::table('product')->where('id', '=', $id)->delete();
    // return redirect('/khachhang');
});


route::post('themsp', function (Request $req) {
    $ten = $req->input('tensanpham');
    $categoryID = $req->input('loaisp');
    $gia = $req->input('giasp');
    $mota = $req->input('mota');

    $arr=[
        'name' => $ten,
        'CategoryID' => $categoryID,
        'price' => $gia,
        'description' => $mota,
    ];

    if($req->hasFile('hinhanh'))
    {
        $anh=$req->file('hinhanh');
        $duoi=$anh->getClientOriginalExtension();
        //$anh->move('upload','abc.'.$duoi);
        $imageURL= $anh->move('upload',$anh->getClientOriginalName());
        $arr['image']=$imageURL;
    }
      // info($imageURL);

      DB::table('product')->insert(
         $arr);

    return redirect('/khachhang');
});

// get all category name
Route::get('/category','ProductController@getAllCategory');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
