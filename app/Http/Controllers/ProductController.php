<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getAllCategory()
    {
      $data=  DB::table('category')
        ->get();
        return $data;
    }
}
