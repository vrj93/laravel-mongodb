<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'cast', 'classification', 'director', 'genres', 'imdb_rating', 'title'
    ];
}
