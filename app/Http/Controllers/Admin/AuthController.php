<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SearchQuery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getLogin(Request $request)
    {
        if(Auth::check()) {
            $queries = SearchQuery::orderBy('id', 'desc')->paginate();

            return view('admin.home', compact('queries'));
        }

        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        if(Hash::check($request->password, User::find(1)->password)) {
            Auth::loginUsingId(1);

            return redirect()->route('admin.getLogin');
        }

        return redirect()->to('/');
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect()->to('/');
    }
}
