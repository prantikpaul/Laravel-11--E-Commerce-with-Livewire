<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginComponent extends Component
{
    public $email, $password;

    public function mount()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Redirect to the home route if the user is logged in
            return redirect()->route('home');
        }
    }



    public function render()
    {
        return view('livewire.login-component');
    }

    public function submitLogin()
    {
        // Validate the input data
        $validatedData = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login with credentials
        $credentials = [
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
        ];

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                // Redirect to the admin dashboard if the user is an admin
                return redirect()->route('adminDashboard');
            }else{

            return redirect()->route('home');
            }

            // Redirect to home if login is successful
        }

        // If authentication fails, return back with error message
        session()->flash('error', 'Invalid credentials. Please try again.');
    }

}
