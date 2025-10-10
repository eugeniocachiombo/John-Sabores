<?php

namespace App\Livewire\User;

use App\Services\ErrorMessage;
use App\Services\FeedbackService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Logout extends Component
{
    public $listeners = ["confirmExit" => "confirmExit"];

    public function render()
    {
        return view('livewire.user.logout');
    }

    public function exit()
    {
        $this->dispatch("sweetalert", FeedbackService::confirm(
            "warning",
            "Tens a Certeza?",
            'Após confirmar, esta sessão será encerrada',
            "Confirmar",
            "Cancelar",
            "confirmExit",
        ));
    }

    public function confirmExit()
    {
        try {
            Auth::logout();
            return redirect()->route("web.home");
        } catch (\Throwable $th) {
            FeedbackService::register_log($th);
            $this->dispatch("sweetalert", FeedbackService::fail());
        }
    }
}
