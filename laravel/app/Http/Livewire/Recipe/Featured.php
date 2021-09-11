<?php

namespace App\Http\Livewire\Recipe;

use Livewire\Component;
use App\Models\Recipe;

class Featured extends Component
{
    public $keyword, $recipes=array(), $featured;
    
    public function mount(){
        $this->featured=\App\Models\Featured::get();
    }
    public function updatedKeyword(){
        $this->recipes = Recipe::where('name','like', '%'.$this->keyword.'%')->limit(6)->get();
    }

    public function add(Recipe $recipe){
        $data['recipe_id']=$recipe->id;
        $featured = \App\Models\Featured::create($data);
        $this->reset(['keyword','recipes']);
        $this->featured=\App\Models\Featured::get();
    }
    public function render()
    {
        return view('livewire.recipe.featured');
    }
}
