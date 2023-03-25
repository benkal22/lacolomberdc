<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetController;
use Illuminate\Support\Facades\Route;

/**
 * Accueil
 * 
 * */
// Route::get('/dashboard', function () {
//     return view('admin.projet');
// })->middleware(['auth', 'verified'])->name('dashboard');

/**
 * Projets et zones d'interventions
 * 
 * */
// Route::get('/dashboard', function () {
//     return view('admin.projet');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::redirect('/dashboard', "/admin_projets")->middleware(['auth', 'verified'])->name('dashboard');

Route::resource("admin_projets", ProjetController::class)->middleware(['auth', 'verified']);

Route::resource('products', ProductController::class)->middleware(['auth', 'verified']);

// Route::middleware('auth')->group(function () {
//     Route::get('/projet', [ProjetController::class, 'edit'])->name('projet.edit');
//     Route::patch('/projet', [ProjetController::class, 'update'])->name('projet.update');
//     Route::delete('/projet', [ProjetController::class, 'destroy'])->name('projet.destroy');
// });

