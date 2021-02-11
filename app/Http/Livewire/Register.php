<?php

namespace App\Http\Livewire;

use App\Models\BloodGroup;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $full_name = null;
    public $bloodGroups = [];
    public $countries = [];
    public $states = [];
    public $cities = [];
    public $email = null;
    public $phone = null;
    public $newbloodgroup = null;
    public $newcountry = null;
    public $newstate = null;
    public $newcity = null;
    public $address = null;
    public $password;
    public $confirm_password;
    public $validationStatus = false;
    public $displayStatus = 1;



    public function mount(){
        $this->bloodGroups = BloodGroup::latest()->get();
        $this->countries = Country::latest()->get();
    }

    public function updated($propertyName)
    {
       $this->validateOnly($propertyName,[
            'full_name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'phone'=>'required',
            'newbloodgroup'=>'required',
            'newcountry'=>'required',
            'newstate'=>'required',
            'newcity'=>'required',
            'password'=>'required|min:08|confirmed',
        ]);
    }


    public function submit(){
        $this->validate([
            'full_name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'phone'=>'required',
            'newbloodgroup'=>'required',
            'newcountry'=>'required',
            'newstate'=>'required',
            'newcity'=>'required',
            'password'=>'required|min:08',
        ]);

        $user = new User();
        $user->role_id = 3;
        $user->name = $this->full_name;
        $user->blood_group_id = $this->newbloodgroup;
        $user->email = $this->email;
        $user->password = bcrypt($this->password);

        if($user->save()){
            $userProfile = new UserProfile();
            $userProfile->user_id = $user->id;
            $userProfile->contact_number = $this->phone;
            $userProfile->present_country_id = $this->newcountry;
            $userProfile->permanent_country_id = $this->newcountry;
            $userProfile->present_state_id = $this->newstate;
            $userProfile->permanent_state_id = $this->newstate;
            $userProfile->present_city_id = $this->newcity;
            $userProfile->permanent_city_id = $this->newcity;
            $userProfile->present_address =  $this->address;
            $userProfile->permanent_address =  $this->address;

            if($userProfile->save()){
                session()->flash('success_message', 'Registration successfully done, Now you can login.');
                $this->displayStatus = 0;
            }else{
                session()->flash('error_message', 'Something Went To Wrong.Please Try Again!!');
            }

        }else{
            session()->flash('error_message', 'Something Went To Wrong.Please Try Again!!');
        }
    }

    public function updatedNewcountry(){
        $this->states = State::where('country_id',$this->newcountry)->get();
    }

    public function updatedNewstate(){
        $this->cities = City::where('state_id',$this->newstate)->get();
    }

    public function updatedNewcity(){
        $this->address = City::find($this->newcity)->name.', '.State::find($this->newstate)->name.', '.Country::find($this->newcountry)->name;
        $this->validationStatus = true;
    }


    public function showLoginForm(){
        $this->displayStatus = 0;
    }

    public function showRegisterForm(){
        $this->displayStatus = 1;
    }
    public function showForgetPasswordForm(){
        $this->displayStatus = 2;
    }



    public function render()
    {
        return view('livewire.register');
    }
}
