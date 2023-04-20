<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use App\Models\About;
use App\Models\Contact;
use App\Models\News;
use App\Models\Project;
use App\Models\Team;
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
 * Home
 */
// Route::get('/', function () {    
//     return view('home');
// })->name('/');
Route::get('/', function () {
    $abouts = About::all()->first();
    $teams = Team::all();   
    $projects = Project::all();
    $news = News::all();
    return view('home', compact(['abouts', 'teams', 'projects', 'news']));
})->name('/');
Route::resource('/home', HomeController::class);

/**
 * About
 */
Route::get('/apropos', function () {
    $abouts = About::all()->first();
    $teams = Team::all();
    return view('about.index', compact(['abouts', 'teams']));
})->name('apropos');
Route::resource('admin_apropos', AboutController::class)->middleware('auth');

/**
 * Team
 */
Route::resource('admin_team', TeamController::class)->middleware('auth');

/**
 * Projects
 */
Route::get('/projets', function () {
    $projects = Project::all();
    return view('projects.index', compact('projects'));
})->name('projets');
Route::resource('admin_projets', ProjectController::class)->middleware('auth');

/**
 * News
 */
Route::get('/actualites', function () {
    $news= News::all();
    return view('news.index', compact('news'));
})->name('actualites');
Route::resource('admin_actualites', NewsController::class)->middleware('auth');

/**
 * Contacts
 */
Route::get('/contacts', function () {
    return view('contact.index');
})->name('contacts');
Route::resource('admin_contacts', ContactController::class)->middleware('auth');

/**
 * Donations
 */
Route::get('/dons', function () {
    return view('donations.index');
})->name('dons');
Route::resource('admin_dons', DonationController::class)->middleware('auth');

/**
 * Errors
 * 
 * */
Route::fallback(function() {
    return view('errors.404'); // la vue 404.blade.php
});


/**
 * ADMINISTRATTION
 */

Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

