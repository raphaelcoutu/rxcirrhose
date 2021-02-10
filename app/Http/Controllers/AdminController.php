<?php

namespace App\Http\Controllers;

use App\Models\SearchQuery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function getLogin(Request $request)
    {
        if(Auth::check()) {
            $queries = SearchQuery::orderBy('created_at', 'desc')->paginate();

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
