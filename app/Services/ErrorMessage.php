<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class ErrorMessage
{

    public static function register_log($th)
    {
        Log::info("Linha: " . $th->getLine() . ", Arquivo: " . $th->getFile());
        Log::error($th->getMessage());
    }

    public static function sweetalert()
    {
        return [
            "icon" => "error",
            "title" => "Erro!",
            "html" => "<b>Falha ao realizar operação</b>",
            "btn" => true,
            "timer" => 40000,
        ];
    }
}
