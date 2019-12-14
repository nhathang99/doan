<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getAllCategory()
    {
        $data = DB::table('category')
            ->get();

        return $data;
    }
    public function postComment(Request $req, $id)
    {
        $name = $req->input('name');
        $content = $req->input('content');
        $result = DB::table('comment')->insert(
            [
                'com_name' => $name,
                'com_content' => $content,
                'productID' => $id,
            ]
        );

        return 'ok';
    }
    public function getCommentByProduct(Request $req,$productID)
    {
        $comments = DB::table('comment')->where('productID', '=', $productID)->get();
        return $comments;
    }
}
