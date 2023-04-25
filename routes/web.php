<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

// Gère l'authentification admin 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('page/admin0/index');
    })->name('dashboard');
});

// Gère la déconnexion admin 
Route::post('/logout', function (Request $request) {
        $request->session()->invalidate();
        Auth::logout();
        return redirect('/login');
    })->name('logout');
    
 // LES ROUTES CLIENTS
Route::get('/', function () { return view('welcome');});
Route::get('/home', function () { return view('page/client/index');})->name("home");
Route::get('/actualite', function () { return view('page/client/actualite');})->name("actualite");
Route::get('/contact', function () { return view('page/client/contact');})->name("contact");
Route::get('/blog', function () { return view('page/client/blog');})->name("blog");

 // LES ROUTES ADMIN
Route::get('/admin0', function () { return view('page/admin0/index');})->name("admin0");
Route::get('/login_admin', function () { return view('page/admin0/login_admin');});

        // * Les formulaires d'ajout
Route::get('/ajout_article', function () { return view('page/admin0/ajout_article');})->name("ajout_article");
Route::get('/ajout_categorie', function () { return view('page/admin0/ajout_categorie');})->name("ajout_categorie");
Route::get('/ajout_formule', function () { return view('page/admin0/ajout_formule');})->name("ajout_formule");
Route::get('/ajout_galerie', function () { return view('page/admin0/ajout_galerie');})->name("ajout_galerie");
Route::get('/ajout_sous_categorie', function () { return view('page/admin0/ajout_sous_categorie');})->name("ajout_sous_categorie");
Route::get('/ajout_team', function () { return view('page/admin0/ajout_team');})->name("ajout_team");

        // * Les listes
Route::get('/liste_article', function () { return view('page/admin0/liste_article');})->name("liste_article");
Route::get('/liste_categorie', function () { return view('page/admin0/liste_categorie');})->name("liste_categorie");
Route::get('/liste_formule', function () { return view('page/admin0/liste_formule');})->name("liste_formule");
Route::get('/liste_galerie', function () { return view('page/admin0/liste_galerie');})->name("liste_galerie");
Route::get('/liste_sous_categorie', function () { return view('page/admin0/liste_sous_categorie');})->name("liste_sous_categorie");
Route::get('/liste_team', function () { return view('page/admin0/liste_team');})->name("liste_team");

        // * Les listes supprimées
Route::get('/supprime_article', function () { return view('page/admin0/supprime_article');})->name("supprime_article");
Route::get('/supprime_categorie', function () { return view('page/admin0/supprime_categorie');})->name("supprime_categorie");
Route::get('/supprime_formule', function () { return view('page/admin0/supprime_formule');})->name("supprime_formule");
Route::get('/supprime_sous_categorie', function () { return view('page/admin0/supprime_sous_categorie');})->name("supprime_sous_categorie");

        // * Les listes des commentaires
Route::get('/approuve_commentaire', function () { return view('page/admin0/approuve_commentaire');})->name("approuve_commentaire");
Route::get('/brouillon_commentaire', function () { return view('page/admin0/brouillon_commentaire');})->name("brouillon_commentaire");

        // * Les listes des Devis approuvé 
Route::get('/approuve_devis', function () { return view('page/admin0/approuve_devis');})->name("approuve_devis");
Route::get('/brouillon_devis', function () { return view('page/admin0/brouillon_devis');})->name("brouillon_devis");

        // * Les listes des Devis approuvé 
Route::get('/setting', function () { return view('page/admin0/setting');})->name("setting");