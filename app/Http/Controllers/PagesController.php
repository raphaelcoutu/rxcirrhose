<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function cirrhose()
    {
        return view('pages.cirrhose');
    }

    public function faq()
    {
        return view('pages.faq');
    }
}
