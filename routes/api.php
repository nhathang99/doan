<?php
use App\Utils\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
Route::delete('delete/user/{id}', function ($id) {
    DB::table('users')->where('id', '=', $id)->delete();
    // return redirect('/khachhang');
});
Route::post('admin/updateUser', function (Request $request) {
    return redirect('/user');

});
Route::post('admin/updateProduct', function (Request $request) {
    $id = $request->input('idProducttt');
    // dd($id);
    $cate = (int) $request->get('categorySelect');
    $name = $request->input('nameProduct');
    $mota = $request->input('mota');
    $gia = $request->input('price');
    $newImageURLUpdate = $request->hasFile('image2');
    $imageUpdate = $request->file('image2');
    info($imageUpdate);

    $data = [
        'CategoryID' => $cate,
        'price' => $gia,
        'name' => $name,
        'description' => $mota,
        'updated_at' => now(),
    ];
    
    if ($newImageURLUpdate) {
        info('vao if');
        $imageUpdate = $request->file('image2');
        $newImageURLUpdate = UploadFile::uploadFile('upload', $imageUpdate);
        DB::table('product')
            ->where('id', $id)
            ->update([
                'CategoryID' => $cate,
                'price' => $gia,
                'name' => $name,
                'description' => $mota,
                'image' => $newImageURLUpdate,
                'updated_at' => now(),
            ]);
    } else {
        info('vao else');
        // dd($id);
        // dd($data);
        DB::table('product')->where('id', $id)
            ->update($data);
    }
    return redirect('/sanpham');

});
Route::post('admin/viewdetail', function (Request $request) {
    $id = $request->id;
    $product = DB::table('product')
        ->join('category', 'product.CategoryID','=','category.id')
        ->select('product.*', 'category.CategoryName')
        ->where('product.id', $id)
        ->get();
    // $category=DB::table('category')->get();
    // info($category);
    return $product;

});
Route::post('admin/viewdetailUser', function (Request $request) {
    $id = $request->id;
    $product = DB::table('users')->where('users.id', $id)
        ->get();
    $test = DB::table('users')->select('brithdate')->get();
    info($test);
    // info($category);
    return $product;

});

route::post('themsp', function (Request $req) {
    $ten = $req->input('tensanpham');
    $categoryID = $req->input('loaisp');
    $gia = $req->input('giasp');
    $mota = $req->input('mota');

    $arr = [
        'name' => $ten,
        'CategoryID' => $categoryID,
        'price' => $gia,
        'description' => $mota,
    ];

    if ($req->hasFile('hinhanh')) {
        $anh = $req->file('hinhanh');
        $duoi = $anh->getClientOriginalExtension();
        //$anh->move('upload','abc.'.$duoi);
        $imageURL = $anh->move('upload', $anh->getClientOriginalName());
        $arr['image'] = $imageURL;
    }
    // info($imageURL);

    DB::table('product')->insert(
        $arr);

    return redirect('/sanpham');
});
Route::post('/themuser', function (Request $request) {
    $username = $request->input('username');
    $email = $request->input('email');
    $password = bcrypt($request->input('password'));
    $date = $request->input('date');
    $role = $request->get('role');
    DB::table('users')->insert(
        [
            'name' => $username,
            'email' => $email,
            'password' => $password,
            'brithdate' => $date,
            'isAdmin' => $role,
            'created_at' => now(),
            'updated_at' => now(),
        ]
    );
    return redirect('/user');
});

// get all category name
Route::get('/category', 'ProductController@getAllCategory');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
