<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $form = [
        'email' => '',
        'password' => ''
    ];
    public  $status = false;
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'form.email' => 'required|email',
            'form.password'=>'required|min:08',
        ]);

        $this->status =true;
    }

    public function submit()
    {
        $this->validate([
            'form.email' => 'required|email',
            'form.password'=>'required|min:08',
        ]);

       if(Auth::attempt($this->form) == true){
           return redirect()->route('home');
       }else{
           session()->flash('error_message', 'Email and password does not match our record');
       }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
