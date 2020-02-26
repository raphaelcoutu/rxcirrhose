<?php

namespace App;

use App\Search\Searchable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Pour Elasticsearch
    // use Searchable;

    protected $guarded = [];

    public function drugs()
    {
        return $this->hasMany(Drug::class);
    }
}
