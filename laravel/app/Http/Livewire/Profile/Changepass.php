<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class Changepass extends Component
{
    public $current, $password, $password_confirmation, $error=null;

    public function submit(){
        if (Hash::check($this->current, Auth::user()->password)) {
            $this->validate([
                "password"=>"required|confirmed",
            ]);
            Auth::user()->password = Hash::make($this->password);
            Auth::user()->save();
            session()->flash('alert-success', 'Password updated successfully');
            return redirect()->to('/profile');
        }else{
            $this->error = "Wrong current password";
        }

    }
    public function render()
    {
        return view('livewire.profile.changepass');
    }
}
