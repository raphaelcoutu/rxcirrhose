<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;

    // Pour Elasticsearch
    // use Searchable;

    protected $guarded = [];

    public function translations(): HasMany
    {
        return $this->hasMany(ArticleTranslation::class);
    }
}
