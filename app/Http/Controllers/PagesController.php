<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
        if(App::isLocale('en')) return redirect()->action('PagesController@cirrhosis');

        return view('pages.cirrhosis_'.App::currentLocale());
    }

    public function cirrhosis()
    {
        if(App::isLocale('fr')) return redirect()->action('PagesController@cirrhose');

        return view('pages.cirrhosis_'.App::currentLocale());
    }

    public function childPugh()
    {
        return view('pages.child-pugh_'.App::currentLocale());
    }

    public function faq()
    {
        return view('pages.faq_'.App::currentLocale());
    }

    public function quiSommesNous()
    {
        if(App::isLocale('en')) return redirect()->action('PagesController@aboutUs');

        return view('pages.about_us_'.App::currentLocale());
    }

    public function aboutUs()
    {
        if(App::isLocale('fr')) return redirect()->action('PagesController@quiSommesNous');

        return view('pages.about_us_'.App::currentLocale());
    }

    public function conditionsGeneralesUtilisation()
    {
        if(App::isLocale('en')) return redirect()->action('PagesController@termsOfUse');

        return view('pages.terms_of_use_'.App::currentLocale());
    }

    public function termsOfUse()
    {
        if(App::isLocale('fr')) return redirect()->action('PagesController@conditionsGeneralesUtilisation');

        return view('pages.terms_of_use_'.App::currentLocale());
    }
}
