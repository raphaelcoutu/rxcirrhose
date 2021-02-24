<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTranslation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function drugs()
    {
        return $this->hasMany(Drug::class);
    }
}
