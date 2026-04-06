<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Comment;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::with('comments')->orderBy('created_at', 'desc')->paginate(8);

        return view('movie.index', ['movies' => $movies]);
    }

    public function show(Movie $movie) {
        $movie->load('comments'); 

        return view('movie.show', ['movie' => $movie]);
    }

    public function create() {

        return view('movie.new');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|min:0|max:20',
            'description' => 'required|string|min:20|max:1000',
            'overview' => 'required|string|min:20|max:255',
            'release_year' => 'required|integer|min:1930|max:2030',
            'rating' => 'required|integer|min:0|max:10',
            'total_reviews' => 'required|integer|min:0|max:10000000',
            'img_url' => 'required|string',
            'watched' => 'required|boolean',
        ]);

        $validated['watched'] = $request->boolean('watched');

        Movie::create($validated);

        return redirect()->route('movie.index')->with('success', 'Movie Added!');
    }

    public function destroy(Movie $movie) {
        $movie->delete();

        return redirect()->route('movie.index')->with('success', 'Movie Deleted!');
    }
}
