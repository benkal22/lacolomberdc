<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjetController;
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
Route::resource('/', AccueilController::class)
    ->only(['index']);

/**
 * Projets et zones d'interventions
 * 
 * */
Route::resource('/projets', ProjetController::class)
->only(['index']);


/**
 * Contact
 * 
 * */
// Route::get('contact', [ContactForm::class, 'render', 'submit']);
Route::get('mails', [ContactMail::class, 'index']);

Route::resource('contact', ContactController::class)
    ->only(['index']);

Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
    
/**
 * A propos
 * 
 * */
Route::resource('apropos', AproposController::class)
    ->only(['index']);
