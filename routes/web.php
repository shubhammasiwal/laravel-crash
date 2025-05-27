<?php

use App\Livewire\BirdForm;
use App\Livewire\Counter;
use App\Livewire\Lazy;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);
Route::get('/bird-form', BirdForm::class);
Route::get('/lazy', Lazy::class)->lazy();