<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Elasticsearch\Client;
use App\Models\SearchQuery;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\ArticleTranslation;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    // private $elasticsearch;

    // public function __construct(Client $elasticsearch)
    // {
    //     $this->elasticsearch = $elasticsearch;
    // }

    public function search(Request $request)
    {
        $query = $request->get('q') ?? '';

        // $items = $this->searchOnElasticsearch($query);
        // return $this->buildCollection($items);

        return $this->searchOnEloquent($query);
    }

    private function searchOnEloquent(string $query = '')
    {
        $keywords = explode(' ', trim($this->stripAccents($query)));
        $results = ArticleTranslation::select('id', 'locale', 'title', 'slug')
        ->whereHas('article', function ($q) use ($keywords) {
            foreach ($keywords as $keyword) {
                $q->where('keywords', 'LIKE', '%' . $keyword . '%');
            }
        })->where('locale', App::currentLocale())
            ->limit(5)
            ->get();

        if (!Auth::check()) {
            $searchQuery = new SearchQuery;
            $searchQuery->host = request()->getClientIp();
            $searchQuery->query = $query;
            $searchQuery->results = $results->count();
            $searchQuery->save();
        }

        return $results;
    }

    function stripAccents($str) {
        return strtr(utf8_decode($str), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
    }

    // private function searchOnElasticsearch(string $query = '')
    // {
    //     $items = $this->elasticsearch->search([
    //         'index' => 'articles',
    //         'type' => 'articles',
    //         'body' => [
    //             "_source" => ["title"],
    //             "query" => [
    //                 "multi_match" => [
    //                     "query"=> $query,
    //                     "fields" => ["title", "summary"],
    //                     "fuzziness" => "AUTO"
    //                 ]
    //             ]
    //         ]
    //     ]);

    //     return $items;
    // }

    // private function buildCollection(array $items)
    // {
    //     return array_map(function ($item) {
    //         return [
    //             'id' => $item['_id'],
    //             'title' => $item['_source']['title']
    //         ];
    //     }, $items['hits']['hits']);
    // }

    // public function reindex()
    // {
    //     foreach(Article::cursor() as $article)
    //     {
    //         $this->elasticsearch->index([
    //             'index' => 'articles',
    //             'type' => 'articles',
    //             'id' => $article->getKey(),
    //             'body' => $article->toArray()
    //         ]);
    //     }

    //     return 'OK.';
    // }
}
