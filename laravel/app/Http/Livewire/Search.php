<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $keyword;
    public function updatedKeyword(){
        $this->validate([
            'keyword'=>'numeric',
        ]);
    }
    public function render()
    { 
        return view('livewire.search');
    }
}
