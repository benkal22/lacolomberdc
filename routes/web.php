<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/**
 * Accueil
 * 
 * */
Route::get('/', function () {
    return view('accueil.index');
})->name('home');

/**
 * Apropos
 * 
 * */
Route::resource('apropos', AproposController::class)
    ->only(['index']);

/**
 * Projets et zones d'interventions
 * 
 * */
Route::get('/projets', function () {
    return view('projets.index');
})->name('projets');
/**
 * Contact
 * 
 * */
Route::resource('contact', ContactController::class)
    ->only(['index']);

Route::get('mails', [ContactMail::class, 'index']);
    
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

/**
 * Dons
 * 
 * */
Route::get('/don', [App\Http\Controllers\DonController::class, 'index'])->name('don');

Route::post('/don', [App\Http\Controllers\DonController::class, 'store'])->name('don.store');

/**
 * Actualites
 * 
 * */
Route::get('/actualites', [App\Http\Controllers\ActualiteController::class, 'index', 'store'])->name('actualites');


// Route::post('/actualites', [ActualiteController::class, 'store'])->name('actualites.store');


/**
 * Errors
 * 
 * */
Route::fallback(function() {
    return view('errors.404'); // la vue 404.blade.php
 });

//  Route::get('/', function () {
//     return view('welcome');
// });

require __DIR__.'/admin.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


