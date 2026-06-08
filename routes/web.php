<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/our-work', [PageController::class, 'ourwork'])->name('ourwork');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/why-us', [PageController::class, 'whyus'])->name('whyus');