<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Auth;
class Edit extends Component
{
    public $editForm=false;
    public $name, $email;

    public function mount(){
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }
    public function edit()
    {
        $this->editForm=true;
    }
    public function cancel()
    {
        $this->editForm=false;
    }
    public function save(){
        Auth::user()->name = $this->name;
        Auth::user()->email = $this->email;
        Auth::user()->save();
        session()->flash('alert-success', 'Profile updated successfully');
        return redirect()->to('/profile');
    }
    public function render()
    {
        return view('livewire.profile.edit');
    }
}
