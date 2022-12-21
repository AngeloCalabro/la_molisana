<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Recipe;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data = [
            'products' => Product::all(),
            'recipes' => Recipe::all()

        ];
        return view('home', $data);
    }
}
