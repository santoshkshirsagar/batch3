<?php

namespace App\Http\Livewire\Recipe;

use Livewire\Component;

class Card extends Component
{
    public $recipe;
    public function render()
    {
        return view('livewire.recipe.card');
    }
}
