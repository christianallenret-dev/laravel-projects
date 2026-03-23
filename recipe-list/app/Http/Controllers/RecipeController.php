<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index() {
        $recipes = Recipe::all();

        return view('recipes.recipes', ['recipes' => $recipes]);
    }

    public function show($id) {
        $recipes = Recipe::find($id);

        return view('recipes.show', ['recipes' => $recipes]);
    }
}
