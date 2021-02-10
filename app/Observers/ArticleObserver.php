<?php

namespace App\Observers;

use App\Models\Article;
use Elasticsearch\Client;

class ArticleObserver
{
    // private $elasticsearch;

    // public function __construct(Client $elasticsearch)
    // {
    //     $this->elasticsearch = $elasticsearch;
    // }

    /**
     * Handle the article "created" event.
     *
     * @param  \App\Article  $article
     * @return void
     */
    public function created(Article $article)
    {
        // $this->elasticsearch->index([
        //     'index' => 'articles',
        //     'type' => 'articles',
        //     'id' => $article->getKey(),
        //     'body' => $article->toArray()
        // ]);
    }

    /**
     * Handle the article "updated" event.
     *
     * @param  \App\Article  $article
     * @return void
     */
    public function updated(Article $article)
    {
        //
    }

    /**
     * Handle the article "deleted" event.
     *
     * @param  \App\Article  $article
     * @return void
     */
    public function deleted(Article $article)
    {
        //
    }

    /**
     * Handle the article "restored" event.
     *
     * @param  \App\Article  $article
     * @return void
     */
    public function restored(Article $article)
    {
        //
    }

    /**
     * Handle the article "force deleted" event.
     *
     * @param  \App\Article  $article
     * @return void
     */
    public function forceDeleted(Article $article)
    {
        //
    }
}
