<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout(){
        if (Auth::logout()){
            return redirect()->route('join_us');
        }
    }
    public function render()
    {
        return view('livewire.logout');
    }
}
