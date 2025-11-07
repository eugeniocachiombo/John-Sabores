<?php

use App\Livewire\Web\LandingPage;
use Illuminate\Support\Facades\Route;

Route::get("/", function (){
    return redirect()->route("web.home");
});

Route::get("/install_composer", function (){
    shell_exec('composer install --no-dev --optimize-autoloader');
    echo "Composer dependencies installed.";
});


Route::prefix("web")->name("web.")->group(function(){
    Route::get("/inicio", LandingPage::class)->name("home");
});
