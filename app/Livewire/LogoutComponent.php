<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutComponent extends Component
{
    public function logout()
    {
        Auth::logout(); // Log out the user
        session()->invalidate(); // Invalidate the session
        session()->regenerateToken(); // Regenerate CSRF token
        session()->flash('success', 'Logout successful');

        return redirect()->route('login'); // Redirect to the login page
    }

    public function render()
    {
        return view('livewire.logout-component');
    }
}

