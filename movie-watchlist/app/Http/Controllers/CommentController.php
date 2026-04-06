<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Movie;

class CommentController extends Controller
{
    public function store(Request $request, Movie $movie) {
        $validated = $request->validate([
            'author' => 'required|string|max:255',
            'body' => 'required|string|min:20|max:255',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $movie->comments()->create($validated);

        return redirect()->route('movie.show', $movie)->with('success', 'Comment Added!');
    }
}
