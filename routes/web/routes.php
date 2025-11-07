<?php

use App\Livewire\Web\LandingPage;
use Illuminate\Support\Facades\Route;

Route::get("/", function (){
    return redirect()->route("web.home");
});

Route::prefix("web")->name("web.")->group(function(){
    Route::get("/inicio", LandingPage::class)->name("home");
});
