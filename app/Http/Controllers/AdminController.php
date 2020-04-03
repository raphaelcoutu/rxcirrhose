<?php

namespace App\Http\Controllers;

use App\SearchQuery;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function getLogin(Request $request)
    {
        if(Auth::check()) {
            $page = $request['page'] ?? 1;
            $nbPerPage = 25;
            $offset = ($page - 1) * $nbPerPage;

            $queries = SearchQuery::orderBy('created_at', 'desc')->offset($offset)->limit(25)->get();
            $queryCount = SearchQuery::count();

            return view('admin.home', compact('queries', 'queryCount'));
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
