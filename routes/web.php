<?php
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});  

Route::get('/chitiet',function(){
   return view('chitiet');
});

Route::get('/home', function(){
    $data = DB::table('product')->get();
   // dd($data);
    return view('home',['data'=>$data]);
});

Route::get('/detail/{id}',function($id){
    $data = DB::table('product')->where('id', '=', $id)->get();
     //dd($data);
    return view('chitiet',['data'=>$data]);
});

route::get('/admin',function(){
    return view('admin');
});

route::get('/khachhang',function(){
    $data = DB::table('product')
            ->join('category', 'product.CategoryID', '=', 'category.id')
            ->select('product.*', 'category.CategoryName')
            ->get();

    return view('khachhang',['data'=>$data]);

});

route::get('/themsp',function(){
    $data = DB::table('Category')->get();

    return view('themsp',['data'=>$data]);
});
route::get('/xemthem',function(){
    return view('/xemthem');

});
route::get('/giohang',function(){
    return view('/giohang');
});


Route::get('/xemthem/{id}',function($id){
    $data = DB::table('product')->where('id', '=', $id)->get();
    // dd($data);
    return view('xemthem',['data'=>$data]);
});

