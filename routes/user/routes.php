<?php

use App\Http\Middleware\DontRequireLogin;
use App\Http\Middleware\RequireLogin;
use App\Livewire\User\AdminDashboard;
use App\Livewire\User\Login;
use App\Livewire\Web\LandingPage;
use Illuminate\Support\Facades\Route;


Route::prefix("administrador")->name("admin.")->group(function(){
    Route::get("/painel", AdminDashboard::class)->name("dashboard")->middleware(RequireLogin::class);
});

Route::get("/login", Login::class)->name("login")->middleware(DontRequireLogin::class);

