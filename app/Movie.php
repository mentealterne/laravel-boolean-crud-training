<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ["title", "genre","director","abstract","production", "language", "cover", "ratings","year", "expireDate"];
}
