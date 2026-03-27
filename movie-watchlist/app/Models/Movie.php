<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'genre',
        'description',
        'watched',
        'overview',
        'release_year',
        'rating',
        'total_reviews',
        'img_url',
    ];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
