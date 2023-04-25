<?php

use App\Http\Controllers\article_Controller;
use App\Http\Controllers\categorie_Controller;
use App\Http\Controllers\souscategorie_Controller;
use App\Http\Controllers\formule_Controller;
use App\Http\Controllers\galerie_Controller;
use App\Http\Controllers\team_Controller;
use App\Http\Controllers\commentaire_Controller;
use App\Http\Controllers\devis_Controller;
use App\Http\Controllers\setting_Controller;
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

Route::get('/', function () { return view('welcome');});

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
Route::get('/blog', [article_Controller::class, 'blog'])->name("blog");
Route::get('/home', [formule_Controller::class, 'home'])->name("home");
Route::get('/actualite', [article_Controller::class, 'actualite'])->name("actualite");
Route::get('/actualite', function () { return view('page/client/actualite');})->name("actualite");
Route::get('/contact', function () { return view('page/client/contact');})->name("contact");

 // LES ROUTES ADMIN
Route::get('/admin0', function () { return view('page/admin0/index');})->name("admin0");
// Route::get('/login_admin', function () { return view('page/admin0/login_admin');});

        // * Les formulaires d'ajout
Route::get('/ajout_article', [article_Controller::class, 'ajout_article'])->name("ajout_article");
Route::get('/ajout_categorie', [categorie_Controller::class, 'ajout_categorie'])->name("ajout_categorie");
Route::get('/ajout_sous_categorie', [souscategorie_Controller::class, 'ajout_sous_categorie'])->name("ajout_sous_categorie");
Route::get('/ajout_galerie', [galerie_Controller::class, 'ajout_galerie'])->name("ajout_galerie");
Route::get('/ajout_team', [team_Controller::class, 'ajout_team'])->name("ajout_team");
Route::get('/ajout_formule', [formule_Controller::class, 'ajout_formule'])->name("ajout_formule");


        // * Les listes
Route::get('/liste_article', [article_Controller::class, 'liste_article'])->name("liste_article");
Route::get('/liste_categorie', [categorie_Controller::class, 'liste_categorie'])->name("liste_categorie");
Route::get('/liste_sous_categorie', [souscategorie_Controller::class, 'liste_sous_categorie'])->name("liste_sous_categorie");
Route::get('/liste_formule', [formule_Controller::class, 'liste_formule'])->name("liste_formule");
Route::get('/liste_galerie', [galerie_Controller::class, 'liste_galerie'])->name("liste_galerie");
Route::get('/liste_team', [team_Controller::class, 'liste_team'])->name("liste_team");


        // * Les listes supprimées
Route::get('/supprime_article', [article_Controller::class, 'supprime_article'])->name("supprime_article");
Route::get('/supprime_categorie', [categorie_Controller::class, 'supprime_categorie'])->name("supprime_categorie");
Route::get('/supprime_sous_categorie', [souscategorie_Controller::class, 'supprime_sous_categorie'])->name("supprime_sous_categorie");
Route::get('/supprime_formule', [formule_Controller::class, 'supprime_formule'])->name("supprime_formule");


        // * Les listes des commentaires
Route::get('/approuve_commentaire', [commentaire_Controller::class, 'approuve_commentaire'])->name("approuve_commentaire");
Route::get('/brouillon_commentaire', [commentaire_Controller::class, 'brouillon_commentaire'])->name("brouillon_commentaire");


        // * Les listes des Devis approuvé 
Route::get('/approuve_devis', [devis_Controller::class, 'approuve_devis'])->name("approuve_devis");
Route::get('/brouillon_devis', [devis_Controller::class, 'brouillon_devis'])->name("brouillon_devis");

        // * Les listes des Devis approuvé 
Route::get('/setting', [setting_Controller::class, 'setting'])->name("setting");
