<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleRevision extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'hidden' => 'boolean'
    ];
}
