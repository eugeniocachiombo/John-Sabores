<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class FeedbackService
{

    public static function register_log($th)
    {
        Log::info("Linha: " . $th->getLine() . ", Arquivo: " . $th->getFile());
        Log::error($th->getMessage());
    }

    public static function fail($icon = null, $title = null, $description = null)
    {
        return [
            "icon" => $icon ?? "error",
            "title" => $title ?? "Erro!",
            "html" =>  "<b>".  $description ?? 'Falha ao realizar operação' ."</b>",
            "btn" => true,
            "timer" => 40000,
        ];
    }

    
}
