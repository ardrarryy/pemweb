<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Livewire\Home;
use App\Livewire\Profile;
use App\Livewire\Portofolio;
use App\Livewire\Resume;
use App\Livewire\Services;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('home');
Route::get('/profile', Profile::class)->name('profile');
Route::get('/portofolio', Portofolio::class)->name('portofolio');
Route::get('/resume', Resume::class)->name('resume');
Route::get('/services', Services::class)->name('services');
