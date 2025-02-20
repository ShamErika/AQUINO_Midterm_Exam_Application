<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $restaurants = [
            ['name' => 'Grumpy Joe', 'cuisine' => 'Italian-American', 'rating' => 4.8],
            ['name' => 'Tokyo Grill', 'cuisine' => 'Japanese', 'rating' => 4.6],
            ['name' => 'Texas Roadhouse', 'cuisine' => 'American', 'rating' => 4.3],
            ['name' => 'Cuatro Alta', 'cuisine' => 'Mexican', 'rating' => 4.7],
            ['name' => 'LAtelier Du Grain', 'cuisine' => 'French', 'rating' => 4.5],
        ];

        return view('restaurants', compact('restaurants'));
    }
}
