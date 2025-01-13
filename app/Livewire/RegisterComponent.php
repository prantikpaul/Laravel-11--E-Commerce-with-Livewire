<?php
namespace App\Http\Livewire;
namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class RegisterComponent extends Component
{
    public $name, $email, $phone, $address, $password, $password_confirmation;

        public function submitLogin()
    {
        $validatedData = $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|unique:users,phone', // Make sure the phone is required and unique
            'address' => 'required|string',
            'password' => 'required|confirmed|min:8',
        ]);

        // Proceed with saving the validated data
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'], // Ensure phone is part of the insert
            'address' => $validatedData['address'],
            'password' => bcrypt($validatedData['password']),
        ]);

        session()->flash('success', 'Registration successful');
       return redirect()->route('login');
    }




    public function render()
    {
        return view('livewire.register-component');
    }
}

