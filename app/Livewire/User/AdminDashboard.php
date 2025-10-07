<?php

namespace App\Livewire\User;

use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        return view('livewire.user.admin-dashboard')
        ->layout("components.layouts.admin.app");
    }
}
