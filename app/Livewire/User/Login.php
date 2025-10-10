<?php

namespace App\Livewire\User;

use App\Services\ErrorMessage;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    protected $rules = [
        "email" => "required|email",
        "password" => "required",
    ];

    protected $messages = [
        "email.required" => "Obrigatório",
        "email.email" => "aceita apenas email",
        "password.required" => "Obrigatório",
    ];

    public function render()
    {
        return view('livewire.user.login')
        ->layout("components.layouts.auth.app");
    }

    public function auth(){
        $this->validate();

        try {

            $credentials = [
                "email" => $this->email,
                "password" => $this->password
            ];

            if (Auth::attempt($credentials)) {
                return redirect()->route("admin.dashboard");
            } else {
                dd("Utilizador não encontrado");
            }
            
        } catch (\Throwable $th) {
            ErrorMessage::register_log($th);
            $this->dispatch("sweetalert", ErrorMessage::sweetalert());
        }
    }
}
