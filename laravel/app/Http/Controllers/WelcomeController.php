<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\Cache;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        //$latest = Recipe::latest()->limit(4)->get();
        $seconds=60;
        $latest = Cache::remember('latestRecipe', $seconds, function () {
            return Recipe::latest()->limit(4)->get();
        });

        return view('welcome', compact('latest'));
    }
}
