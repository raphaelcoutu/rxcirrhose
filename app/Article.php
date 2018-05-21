<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function drugs()
    {
        return $this->hasMany(Drug::class);
    }
}
