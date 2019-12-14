<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function renderProductByCategory($categoryID)
    {
        $data = DB::table('product')
            ->where('CategoryID', $categoryID)
            ->simplePaginate(15);

        return view('home', ['data' => $data]);

    }

    public function renderDetailProduct($productID)
    {
        $data = DB::table('product')->where('id', '=', $productID)->get();
  
        return view('chitiet', ['data' => $data]);
    }
}
