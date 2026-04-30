<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog_posts';
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'slug',
        'excerpt',
        'published_at',
    ];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
