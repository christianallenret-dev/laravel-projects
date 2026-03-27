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

    public function show($id) {
        $movie = Movie::with('comments')->findOrFail($id);    

        return view('movie.show', ['movie' => $movie]);
    }

    public function create() {

        return view('movie.new');
    }

    public function store(Request $request) {
        
    }
}
