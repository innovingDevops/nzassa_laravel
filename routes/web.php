<?php

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

Route::get('/', function () { return view('welcome');});
Route::get('/home', function () { return view('page/client/index');});
Route::get('/index', function () { return view('page/client/index');})->name("accueil");
Route::get('/actualite', function () { return view('page/client/actualite');})->name("actualite");
Route::get('/contact', function () { return view('page/client/contact');})->name("contact");
Route::get('/blog', function () { return view('page/client/blog');})->name("blog");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

