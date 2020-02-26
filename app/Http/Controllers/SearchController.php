<?php

namespace App\Http\Controllers;

use App\Article;
use App\SearchQuery;
use Elasticsearch\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SearchController extends Controller
{
    private $elasticsearch;

    public function __construct(Client $elasticsearch)
    {
        $this->elasticsearch = $elasticsearch;
    }

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
        $results = Article::select(['id', 'title', 'slug'])
            ->where(function($q) use ($keywords) {
                foreach($keywords as $keyword) {
                    $q->where('keywords', 'LIKE', '%'.$keyword.'%');
                }
            })->limit(5)
            ->get();

        $searchQuery = new SearchQuery;
        $searchQuery->query = $query;
        $searchQuery->results = $results->count();
        $searchQuery->save();

        return $results;
    }

    function stripAccents($str) {
        return strtr(utf8_decode($str), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
    }

    private function searchOnElasticsearch(string $query = '')
    {
        $items = $this->elasticsearch->search([
            'index' => 'articles',
            'type' => 'articles',
            'body' => [
                "_source" => ["title"],
                "query" => [
                    "multi_match" => [
                        "query"=> $query,
                        "fields" => ["title", "summary"],
                        "fuzziness" => "AUTO"
                    ]
                ]
            ]
        ]);

        return $items;
    }

    private function buildCollection(array $items)
    {
        return array_map(function ($item) {
            return [
                'id' => $item['_id'],
                'title' => $item['_source']['title']
            ];
        }, $items['hits']['hits']);
    }

    public function reindex()
    {
        foreach(Article::cursor() as $article)
        {
            $this->elasticsearch->index([
                'index' => 'articles',
                'type' => 'articles',
                'id' => $article->getKey(),
                'body' => $article->toArray()
            ]);
        }

        return 'OK.';
    }
}
