<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Banner;
use App\Models\Featured;
use Illuminate\Support\Facades\Cache;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        //$latest = Recipe::latest()->limit(4)->get();
        $seconds=120;
        $latest = Cache::remember('latestRecipe', $seconds, function () {
            return Recipe::latest()->limit(4)->get();
        });
        $featured = Cache::remember('featuredRecipe', $seconds, function () {
            return Featured::latest()->limit(4)->get();
        });
        $banners = Banner::orderBy('sequence','asc')->limit(4)->get();

        return view('welcome', compact('latest','banners','featured'));
    }
}
