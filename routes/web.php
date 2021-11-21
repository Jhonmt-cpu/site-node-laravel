<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\TechesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/contact', function () {
    return view('site.contact');
})->name('site.contact');

Route::get('/about', function () {
    return view('site.about');
})->name('site.about');

Route::get('/logos', function () {
    return view('site.logos');
})->name('site.logos');

Route::get('/frameworks', [TechesController::class, 'findAll'])->name('site.frameworks');

Route::get('/courses', function () {
    return view('site.courses');
})->name('site.courses');

Route::post('/contact/new', [ContactsController::class, 'store'])->name('register_contact');

Route::post('/techs/new', [TechesController::class, 'store'])->name('register_tech');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
