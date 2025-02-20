<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $restaurants = [
            ['name' => 'The Gourmet Spot', 'cuisine' => 'Italian', 'rating' => 4.8],
            ['name' => 'Sakura Sushi', 'cuisine' => 'Japanese', 'rating' => 4.6],
            ['name' => 'Burger Haven', 'cuisine' => 'American', 'rating' => 4.3],
            ['name' => 'Casa Mexicana', 'cuisine' => 'Mexican', 'rating' => 4.7],
            ['name' => 'Le Petit Bistro', 'cuisine' => 'French', 'rating' => 4.5],
        ];

        return view('restaurants', compact('restaurants'));
    }
}
