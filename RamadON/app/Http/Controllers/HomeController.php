<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $recettes = Recette::all();

        return view("home", compact("recettes"));
    }
}
