<?php

namespace App\Http\Controllers;

use App\Models\ArticleTranslation;
use App\Models\SearchQuery;
use Carbon\Carbon;
use CodeInc\StripAccents\StripAccents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if(!$request->has('hl')) {
            abort(500);
        }

        $query = $request->get('q') ?? '';

        return $this->searchOnEloquent($request->get('hl'), $query);
    }

    private function searchOnEloquent(string $locale, string $query = '')
    {
        $keywords = explode(' ', trim($this->stripAccents($query)));
        $results = ArticleTranslation::select(['id', 'locale', 'title', 'slug'])
        ->whereHas('article', function ($q) use ($keywords) {
            foreach ($keywords as $keyword) {
                $q->where('keywords', 'ILIKE', '%' . $keyword . '%');
            }
        })->where('locale', $locale)
            ->limit(5)
            ->get();

        if (!Auth::check()) {
            $searchQuery = new SearchQuery;
            $searchQuery->host = request()->getClientIp();
            $searchQuery->query = $query;
            $searchQuery->results = $results->count();
            $searchQuery->created_at = Carbon::now();
            $searchQuery->save();
        }

        return $results;
    }

    function stripAccents($str) {
        return StripAccents::strip($str);
    }
}
