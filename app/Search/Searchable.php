<?php

namespace App\Search;

use App\Observers\ArticleObserver;

trait Searchable {

    public function getSearchIndex()
    {
        $this->getTable();
    }

}
