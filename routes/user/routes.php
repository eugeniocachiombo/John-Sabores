<?php

use App\Livewire\User\AdminDashboard;
use App\Livewire\Web\LandingPage;
use Illuminate\Support\Facades\Route;


Route::prefix("administrador")->name("admin.")->group(function(){
    Route::get("/painel", AdminDashboard::class)->name("dashboard");
});
