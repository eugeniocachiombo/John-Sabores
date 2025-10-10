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
            "html" => $description ?? '<b>Falha ao realizar operação</b>',
            "btn" => true,
            "timer" => 40000,
        ];
    }

    public static function success($icon = null, $title = null, $description = null)
    {
        return [
            "icon" => $icon ?? "success",
            "title" => $title ?? "Sucesso",
            "html" =>   $description ?? '<b>Operação Realizada com Sucesso</b>',
            "btn" => true,
        ];
    }

    
}
