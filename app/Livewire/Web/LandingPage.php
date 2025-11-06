<?php

namespace App\Livewire\Web;

use Livewire\Component;

class LandingPage extends Component
{
    public function render()
    {
        return view('livewire.web.landing-page')
        ->layout("components.layouts.app");
    }
}
