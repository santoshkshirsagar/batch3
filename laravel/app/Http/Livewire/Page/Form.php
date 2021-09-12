<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use Illuminate\Support\Str;

class Form extends Component
{
    public $page;

    protected $rules=[
        "page.name"=>"required",
        "page.slug"=>"required",
    ];

    public function updatedPageName(){
        $this->page['slug'] = Str::slug($this->page['name'], '-');
    }
    public function render()
    {
        return view('livewire.page.form');
    }
}
