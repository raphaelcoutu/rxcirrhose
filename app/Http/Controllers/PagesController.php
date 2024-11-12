<?php

namespace App\Http\Controllers;

use App\Models\ArticleTranslation;
use App\Models\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{
    public function home()
    {
        $cacheKey = 'home_articles_' . App::currentLocale();

        $articles = Cache::remember($cacheKey, 600, function () {
            return ArticleTranslation::with('drugs')
                ->select('id')
                ->where('locale', App::currentLocale())
                ->where('active', 1)
                ->withCount('drugs')
                ->get();
        });

        $articlesCount = $articles->count();
        $drugsCount = $articles->sum('drugs_count');

        return view('pages.home', compact('articlesCount', 'drugsCount'));
    }

    public function cirrhose()
    {
        if (App::isLocale('en')) return redirect()->action([PagesController::class, 'cirrhosis'], ['hl' => 'en']);

        return view('pages.cirrhosis_' . App::currentLocale());
    }

    public function cirrhosis()
    {
        if (App::isLocale('fr')) return redirect()->action([PagesController::class, 'cirrhose'], ['hl' => 'fr']);

        return view('pages.cirrhosis_' . App::currentLocale());
    }

    public function childPugh()
    {
        return view('pages.child-pugh_' . App::currentLocale());
    }

    public function faq()
    {
        return view('pages.faq_' . App::currentLocale());
    }

    public function quiSommesNous()
    {
        if (App::isLocale('en')) return redirect()->action([PagesController::class, 'aboutUs'], ['hl' => 'en']);

        return view('pages.about_us_' . App::currentLocale());
    }

    public function aboutUs()
    {
        if (App::isLocale('fr')) return redirect()->action([PagesController::class, 'quiSommesNous'], ['hl' => 'fr']);

        return view('pages.about_us_' . App::currentLocale());
    }

    public function conditionsGeneralesUtilisation()
    {
        if (App::isLocale('en')) return redirect()->action([PagesController::class, 'termsOfUse'], ['hl' => 'en']);

        return view('pages.terms_of_use_' . App::currentLocale());
    }

    public function termsOfUse()
    {
        if (App::isLocale('fr')) return redirect()->action([PagesController::class, 'conditionsGeneralesUtilisation']);

        return view('pages.terms_of_use_' . App::currentLocale());
    }
}
