<?php

use App\Livewire\Web\LandingPage;
use Illuminate\Support\Facades\Route;


Route::prefix("web")->group(function(){
    Route::get("/inicio", LandingPage::class);
});
