<?php

namespace App\Models;

use App\Search\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    // Pour Elasticsearch
    // use Searchable;

    protected $guarded = [];

    public function translations()
    {
        return $this->hasMany(ArticleTranslation::class);
    }
}
