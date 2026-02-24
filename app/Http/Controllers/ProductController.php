<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        return view('products')->with('title', 'Food & Beverage');
    }
    public function beautyHealth()
    {
        return view('products')->with('title', 'Beauty & Health');
    }
    public function homeCare()
    {
        return view('products')->with('title', 'Home Care');
    }
    public function babyKid()
    {
        return view('products')->with('title', 'Baby & Kid');
    }
}
