<?php

namespace App\Livewire\User;

use App\Models\Recipe;
use App\Models\RecipeCategory;
use App\Models\User;
use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        return view('livewire.user.admin-dashboard', [
            "categories" => RecipeCategory::all(),
            "recipes" => Recipe::all(),
            "users" => User::all(),
        ])
        ->layout("components.layouts.admin.app");
    }
}
