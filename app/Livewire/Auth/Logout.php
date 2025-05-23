<?php

namespace App\Livewire\Auth;

use App\Livewire\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout() {
        auth()->logout();
        return redirect('/login');
    }

    public function render()
    {
        return view('livewire.auth.logout');
    }
}
