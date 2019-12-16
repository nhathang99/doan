<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Redirect;

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
Route::post('admin/updateProduct',function(Request $request){
    $id=$request->input('idProduct');
    $cate=$request->input('cateProduct');
    $name=$request->input('nameProduct');
    $mota=$request->input('mota');
    $gia=$request->input('price');
    $data=[
        'CategoryID'=>$cate,
        'price'=>$gia,
        'name'=>$name,
        'description'=>$mota,
    ];
    info($id);
    
    DB::table('product')->where('id',$id)
                        ->update($data);
    return redirect('/sanpham');

});
Route::post('admin/viewdetail',function(Request $request){
    $id=$request->id;
    info($id);
    $product=DB::table('product')->where('id',$id)->get();
    return $product;

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
