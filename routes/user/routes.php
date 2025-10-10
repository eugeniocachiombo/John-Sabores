<?php

use App\Http\Middleware\DontRequireLogin;
use App\Http\Middleware\RequireLogin;
use App\Livewire\User\AdminDashboard;
use App\Livewire\User\AdminListUsers;
use App\Livewire\User\AdminRecipeCategory;
use App\Livewire\User\Login;
use App\Livewire\Web\LandingPage;
use Illuminate\Support\Facades\Route;

Route::get("/login", Login::class)->name("login")->middleware(DontRequireLogin::class);

Route::prefix("administrador")->name("admin.")->group(function(){
    Route::get("/painel", AdminDashboard::class)->name("dashboard")->middleware(RequireLogin::class);
    Route::get("/categorias", AdminRecipeCategory::class)->name("recipe.category")->middleware(RequireLogin::class);
    Route::get("/usuários", AdminListUsers::class)->name("users")->middleware(RequireLogin::class);
});


