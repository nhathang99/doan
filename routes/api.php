<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Utils\UploadFile;
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
    $cate=(int)$request->get('categorySelect');
    $name=$request->input('nameProduct');
    $mota=$request->input('mota');
    $gia=$request->input('price');
    $newImageURLUpdate = $request->hasFile('image2');
    $imageUpdate = $request->file('image2');
    info($imageUpdate);
  
    $data=[
        'CategoryID'=>$cate,
        'price'=>$gia,
        'name'=>$name,
        'description'=>$mota,
        'updated_at' => now(),
    ];
    if ($newImageURLUpdate) {
        info('vao if');
        $imageUpdate = $request->file('image2');
        $newImageURLUpdate = UploadFile::uploadFile('upload', $imageUpdate);
        DB::table('product')
            ->where('id', $id)
            ->update([
                'CategoryID'=>$cate,
                'price'=>$gia,
                'name'=>$name,
                'description'=>$mota,
                'image'=>$newImageURLUpdate,
                'updated_at' => now(),
            ]);
    }
    else {
        info('vao else');
        DB::table('product')->where('id',$id)
                        ->update($data);
    }
    return redirect('/sanpham');

});
Route::post('admin/viewdetail',function(Request $request){
    $id=$request->id;
    $product=DB::table('product')->where('product.id',$id)
                                ->join('category','category.id','=','product.CategoryID')
                                ->select('product.*','category.CategoryName','category.id')
                                ->get();
    // $category=DB::table('category')->get();
    // info($category);
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
