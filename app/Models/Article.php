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

    public function drugs()
    {
        return $this->hasMany(Drug::class);
    }
}
