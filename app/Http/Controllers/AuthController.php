<?php

namespace App\Http\Controllers;
// use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

class AuthController extends Controller
{
    public  function login(Request $request)
    {
        $data = $request->all;
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials) && Auth::check()) {

            $userInfo = Auth::user();
            $userRole = $userInfo->isAdmin;
            // return redirect('/admin');
            if ($userRole == 1) {
                return redirect('/admin');
            }else{
                Auth::logout();
                return view('/login')->with('successMsg', 'You do not have access');
            }
        } else {
            // return redirect()->intended('admin/login');
            // return redirect()->to('/admin/login')->with(['msg' =>'Đăng nhập bị lỗi']);
            return view('/login')->with('successMsg', 'Invalid username or password');
        }
    }
}
