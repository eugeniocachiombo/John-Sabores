<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.user.logout');
    }

    public function exist()
    {
        try {
            
            Auth::logout();
            return redirect()->route("web.home.y");
            
        } catch (\Throwable $th) {
            Log::info("Linha: " . $th->getLine(), "Arquivo: " . $th->getFile());
            Log::error($th->getMessage());
            $this->dispatch("sweetalert", [
                "icon" => "error",
                "title" => "Erro",
                "html" => "Falha ao realizar operação",
                "btn" => true,
                "timer" => 40000,
            ]);
        }
    }
}
