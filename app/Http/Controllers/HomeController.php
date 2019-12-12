<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function renderProductByCategory($categoryID)
    {
        $data = DB::table('product')
            ->where('CategoryID', $categoryID)
            ->simplePaginate(15);

        return view('home', ['data'=>$data]);

    }
}
