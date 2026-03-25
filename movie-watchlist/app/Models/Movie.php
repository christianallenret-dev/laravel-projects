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
        'img_url',
    ];

    public function comment() {
        return $this->hasMany(Comment::class);
    }
}
