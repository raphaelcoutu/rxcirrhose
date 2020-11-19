<?php

namespace App\Http\Controllers;

use App\Article;
use App\Drug;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $articlesCount = Article::where('active', 1)->count();
        $drugsCount = Drug::where('active', 1)->count();
        return view('pages.home', compact('articlesCount', 'drugsCount'));
    }

    public function cirrhose()
    {
        return view('pages.cirrhose');
    }

    public function childPugh()
    {
        return view('pages.child-pugh');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function quiSommesNous()
    {
        return view('pages.qui-sommes-nous');
    }

    public function cgu()
    {
        return view('pages.conditions-generales-utilisation');
    }
}
