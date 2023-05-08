<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\SouscategorieController;
use App\Http\Controllers\FormuleController;
use App\Http\Controllers\FonctionnaliteController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\SettingController;
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

// la vue welcome 
Route::get('/', function () { return view('welcome');});

// Gère l'authentification admin 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin0', function () {
        return view('page/admin0/index');
    })->name('admin0');
});


// Gère la déconnexion admin 
Route::post('/logout', function (Request $request) {
        $request->session()->invalidate();
        Auth::logout();
        return redirect('/login');
    })->name('logout');
    

 // blog
Route::get('/blog', [ArticleController::class, 'blog'])->name("blog");
Route::post('/blog',  [CommentaireController::class, 'save_commentaire'])->name("save_commentaire");

//contact
Route::get('/contact', [DevisController::class, 'contact'])->name("contact");
Route::post('/contact',  [DevisController::class, 'save_devis'])->name("save_devis");

//home
Route::get('/home', [FormuleController::class, 'home'])->name("home");

//actualite
Route::get('/actualite', [ArticleController::class, 'actualite'])->name("actualite");
// Route::get('/actualite', function () { return view('page/client/actualite');})->name("actualite");

// Categorie
Route::get('/ajout_categorie', [CategorieController::class, 'ajout_categorie'])->name("ajout_categorie");
Route::get('/liste_categorie', [CategorieController::class, 'liste_categorie'])->name("liste_categorie");
Route::get('/supprime_categorie', [CategorieController::class, 'supprime_categorie'])->name("supprime_categorie");
Route::post('/save_categorie',  [CategorieController::class, 'save_categorie'])->name("save_categorie");

// Sous Categorie
Route::get('/ajout_sous_categorie', [SouscategorieController::class, 'ajout_sous_categorie'])->name("ajout_sous_categorie");
Route::get('/liste_sous_categorie', [SouscategorieController::class, 'liste_sous_categorie'])->name("liste_sous_categorie");
Route::get('/supprime_sous_categorie', [SouscategorieController::class, 'supprime_sous_categorie'])->name("supprime_sous_categorie");
Route::post('/save_sous_categorie',  [SouscategorieController::class, 'save_sous_categorie'])->name("save_sous_categorie");

// Article
Route::get('/ajout_article', [ArticleController::class, 'ajout_article'])->name("ajout_article");
Route::get('/liste_article', [ArticleController::class, 'liste_article'])->name("liste_article");
Route::get('/supprime_article', [ArticleController::class, 'supprime_article'])->name("supprime_article");
Route::post('/save_article',  [ArticleController::class, 'save_article'])->name("save_article");

// Devis
Route::get('/liste_devis_valide', [DevisController::class, 'liste_devis_valide'])->name("liste_devis_valide");
Route::get('/liste_devis_brouillon', [DevisController::class, 'liste_devis_brouillon'])->name("liste_devis_brouillon");

// Commentaire 
Route::get('/liste_commentaire_valide', [CommentaireController::class, 'liste_commentaire_valide'])->name("liste_commentaire_valide");
Route::get('/liste_commentaire_brouillon', [CommentaireController::class, 'liste_commentaire_brouillon'])->name("liste_commentaire_brouillon");

// Galerie
Route::get('/ajout_galerie', [GalerieController::class, 'ajout_galerie'])->name("ajout_galerie");
Route::get('/liste_galerie', [GalerieController::class, 'liste_galerie'])->name("liste_galerie");
Route::post('/save_galerie',  [GalerieController::class, 'save_galerie'])->name("save_galerie");

// Team
Route::get('/ajout_team', [TeamController::class, 'ajout_team'])->name("ajout_team");
Route::get('/liste_team', [TeamController::class, 'show_team'])->name("liste_team");
Route::post('/save_team',  [TeamController::class, 'save_team'])->name("save_team");

// Departement 
Route::get('/ajout_departement', [DepartementController::class, 'ajout_departement'])->name("ajout_departement");
Route::get('/liste_departement', [DepartementController::class, 'liste_departement'])->name("liste_departement");
Route::post('/save_departement',  [DepartementController::class, 'save_departement'])->name("save_departement");

// Formule 
Route::get('/ajout_formule', [FormuleController::class, 'ajout_formule'])->name("ajout_formule");
Route::get('/liste_formule', [FormuleController::class, 'liste_formule'])->name("liste_formule");
Route::get('/supprime_formule', [FormuleController::class, 'supprime_formule'])->name("supprime_formule");
Route::post('/save_formule',  [FormuleController::class, 'save_formule'])->name("save_formule");

// Fonctionnalité
Route::get('/ajout_fonctionnalite', [FonctionnaliteController::class, 'ajout_fonctionnalite'])->name("ajout_fonctionnalite");
Route::get('/liste_fonctionnalite', [FonctionnaliteController::class, 'liste_fonctionnalite'])->name("liste_fonctionnalite");
Route::get('/supprime_fonctionnalite', [FonctionnaliteController::class, 'supprime_fonctionnalite'])->name("supprime_fonctionnalite");
Route::post('/save_fonctionnalite',  [FonctionnaliteController::class, 'save_fonctionnalite'])->name("save_fonctionnalite");

// setting
Route::get('/setting', [SettingController::class, 'setting'])->name("setting");
Route::post('/save_setting', [SettingController::class, 'save_setting'])->name("save_setting");

