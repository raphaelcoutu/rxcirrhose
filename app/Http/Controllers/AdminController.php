<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function getLogin()
    {
        if(Auth::check()) {
            return view('admin.home');
        }

        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        if(Hash::check($request->password, User::find(1)->password)) {
            Auth::loginUsingId(1);

            return view('admin.home');
        }

        return redirect()->to('/');
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect()->to('/');
    }
}
