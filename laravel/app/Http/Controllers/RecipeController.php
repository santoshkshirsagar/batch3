<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;
use App\Mail\RecipePublished;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $limit = 10;
        $recipes=Recipe::paginate($limit);
        return view('recipe.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::get();
        return view('recipe.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            "name"=>"required|max:40",
            "description"=>"required",
            "image"=>"required|image",
            "category_id"=>"required",
        ]);
        $validated['image'] = $request->file('image')->store('recipes','public');
        $recipe = Recipe::create($validated);
        Mail::to(\Auth::user())->send(new RecipePublished($recipe));
        return redirect(route('recipe.index'))->with('alert-success','Recipe has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        //
        return view('recipe.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
        $categories = Category::get();
        return view('recipe.edit', compact('recipe','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
        $validated = $request->validate([
            "name"=>"required|max:40",
            "description"=>"required",
            "category_id"=>"required",
        ]);
        if($request->file('image')){
            $request->validate([
                "image"=>"image",
            ]);
            $validated['image'] = $request->file('image')->store('recipes','public');
        }
        $recipe->update($validated);
        return redirect(route('recipe.index'))->with('alert-success','Recipe has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
        $recipe->delete();
        return redirect(route('recipe.index'))->with('alert-success','Recipe has been deleted successfully');
    }
}
