<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $guarded = [];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
