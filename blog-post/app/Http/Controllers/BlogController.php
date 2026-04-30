<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::with('user')->orderBy('published_at', 'desc')->paginate(30);
        return view('blog.index', ['blogs' => $blogs]);
    }

    public function create() {
        return view('blog.create');
    }

    public function show(Blog $blog) {
        $blog->load('user');
        return view('blog.show', ['blog' => $blog]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:5000',
        ]);

        Blog::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'user_id' => Auth::id(),
            'slug' => Str::slug($validated['title']. ' - ' .uniqid()),
            'excerpt' => Str::limit($validated['content'], 120),
            'published_at' => now(),
        ]);

        return redirect()->route('blog.index')->with('success', 'Posted successfully!');
    }
}
