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
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\TemoignageController;
use App\Http\Controllers\BanniereController;
use App\Http\Controllers\Team_interface_clientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
// Route::get('/', function () { return view('welcome');});

// Gère l'authentification admin 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/admin0', function () {return view('page/admin0/index');})->name('admin0');
    Route::get('/admin0', [DevisController::class, 'admin0'])->name('admin0');
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
Route::get('/', [FormuleController::class, 'home'])->name("home");

//actualite
Route::get('/actualite', [ArticleController::class, 'actualite'])->name("actualite");

// Client interface client 
Route::get('/team_interface_client', [TeamController::class, 'team_interface_client'])->name("team_interface_client");
Route::get('/teambydep/{id}', [TeamController::class, 'teambydep'])->name("teambydep");

// Categorie
Route::get('/ajout_categorie', [CategorieController::class, 'ajout_categorie'])->name("ajout_categorie");
Route::get('/liste_categorie', [CategorieController::class, 'liste_categorie'])->name("liste_categorie");
Route::get('/corbeille_categorie', [CategorieController::class, 'corbeille_categorie'])->name("corbeille_categorie");
Route::post('/save_categorie',  [CategorieController::class, 'save_categorie'])->name("save_categorie");
Route::get('/supprime_categorie/{id}',  [CategorieController::class, 'supprime_categorie'])->name("supprime_categorie");
Route::get('/articlebycat/{id}', [CategorieController::class, 'articlebycat'])->name("articlebycat");
Route::get('/edit_categorie/{id}', [CategorieController::class, 'edit_categorie'])->name("edit_categorie");
Route::post('/update_categorie/{id}', [CategorieController::class, 'update_categorie'])->name("update_categorie");


// Sous Categorie
Route::get('/ajout_sous_categorie', [SouscategorieController::class, 'ajout_sous_categorie'])->name("ajout_sous_categorie");
Route::get('/liste_sous_categorie', [SouscategorieController::class, 'liste_sous_categorie'])->name("liste_sous_categorie");
Route::get('/corbeille_sous_categorie', [SouscategorieController::class, 'corbeille_sous_categorie'])->name("corbeille_sous_categorie");
Route::post('/save_sous_categorie',  [SouscategorieController::class, 'save_sous_categorie'])->name("save_sous_categorie");
Route::get('/sous_cat',  [SouscategorieController::class, 'sous_cat'])->name("sous_cat");
Route::get('/supprime_sous_categorie/{id}',  [SouscategorieController::class, 'supprime_sous_categorie'])->name("supprime_sous_categorie");
Route::get('/edit_sous_categorie/{id}',  [SouscategorieController::class, 'edit_sous_categorie'])->name("edit_sous_categorie");
Route::post('/update_sous_categorie/{id}', [SouscategorieController::class, 'update_sous_categorie'])->name("update_sous_categorie");


// Article
Route::get('/ajout_article', [ArticleController::class, 'ajout_article'])->name("ajout_article");
Route::get('/liste_article', [ArticleController::class, 'liste_article'])->name("liste_article");
Route::get('/corbeille_article', [ArticleController::class, 'corbeille_article'])->name("corbeille_article");
Route::post('/save_article',  [ArticleController::class, 'save_article'])->name("save_article");
Route::get('/supprime_article/{id}', [ArticleController::class, 'supprime_article'])->name("supprime_article");
Route::get('/edit_article/{id}', [ArticleController::class, 'edit_article'])->name("edit_article");
Route::post('/update_article/{id}', [ArticleController::class, 'update_article'])->name("update_article");

// Devis
Route::get('/liste_devis_valide', [DevisController::class, 'liste_devis_valide'])->name("liste_devis_valide");
Route::get('/liste_devis_brouillon', [DevisController::class, 'liste_devis_brouillon'])->name("liste_devis_brouillon");
Route::get('/supprime_devis/{id}', [DevisController::class, 'supprime_devis'])->name("supprime_devis");
Route::get('/approuver_devis/{id}', [DevisController::class, 'approuver_devis'])->name("approuver_devis");

// Commentaire 
Route::get('/liste_commentaire_valide', [CommentaireController::class, 'liste_commentaire_valide'])->name("liste_commentaire_valide");
Route::get('/liste_commentaire_brouillon', [CommentaireController::class, 'liste_commentaire_brouillon'])->name("liste_commentaire_brouillon");
Route::post('/save_commentaire', [CommentaireController::class, 'save_commentaire'])->name("save_commentaire");
Route::get('/supprime_commentaire/{id}', [CommentaireController::class, 'supprime_commentaire'])->name("supprime_commentaire");
Route::get('/approuver_commentaire/{id}', [CommentaireController::class, 'approuver_commentaire'])->name("approuver_commentaire");

// Galerie
Route::get('/ajout_galerie', [GalerieController::class, 'ajout_galerie'])->name("ajout_galerie");
Route::get('/liste_galerie', [GalerieController::class, 'liste_galerie'])->name("liste_galerie");
Route::post('/save_galerie',  [GalerieController::class, 'save_galerie'])->name("save_galerie");
Route::get('/supprime_galerie/{id}',  [GalerieController::class, 'supprime_galerie'])->name("supprime_galerie");
Route::get('/edit_galerie/{id}',  [GalerieController::class, 'edit_galerie'])->name("edit_galerie");
Route::post('/update_galerie/{id}',  [GalerieController::class, 'update_galerie'])->name("update_galerie");

// Team
Route::get('/ajout_team', [TeamController::class, 'ajout_team'])->name("ajout_team");
Route::get('/liste_team', [TeamController::class, 'show_team'])->name("liste_team");
Route::post('/save_team', [TeamController::class, 'save_team'])->name("save_team");
Route::get('/supprime_team/{id}', [TeamController::class, 'supprime_team'])->name("supprime_team");
Route::get('/edit_team/{id}', [TeamController::class, 'edit_team'])->name("edit_team");
Route::post('/update_team/{id}', [TeamController::class, 'update_team'])->name("update_team");

// Departement 
Route::get('/ajout_departement', [DepartementController::class, 'ajout_departement'])->name("ajout_departement");
Route::get('/liste_departement', [DepartementController::class, 'liste_departement'])->name("liste_departement");
Route::post('/save_departement', [DepartementController::class, 'save_departement'])->name("save_departement");
Route::get('/supprime_departement/{id}', [DepartementController::class, 'supprime_departement'])->name("supprime_departement");
Route::get('/edit_departement/{id}', [DepartementController::class, 'edit_departement'])->name("edit_departement");
Route::post('/update_departement/{id}', [DepartementController::class, 'update_departement'])->name("update_departement");

// Formule 
Route::get('/ajout_formule', [FormuleController::class, 'ajout_formule'])->name("ajout_formule");
Route::get('/liste_formule', [FormuleController::class, 'liste_formule'])->name("liste_formule");
Route::get('/corbeille_formule', [FormuleController::class, 'corbeille_formule'])->name("corbeille_formule");
Route::post('/save_formule',  [FormuleController::class, 'save_formule'])->name("save_formule");
Route::get('/supprime_formule/{id}',  [FormuleController::class, 'supprime_formule'])->name("supprime_formule");
Route::get('/edit_formule/{id}',  [FormuleController::class, 'edit_formule'])->name("edit_formule");
Route::post('/update_formule/{id}',  [FormuleController::class, 'update_formule'])->name("update_formule");

// Fonctionnalité
Route::get('/ajout_fonctionnalite', [FonctionnaliteController::class, 'ajout_fonctionnalite'])->name("ajout_fonctionnalite");
Route::get('/liste_fonctionnalite', [FonctionnaliteController::class, 'liste_fonctionnalite'])->name("liste_fonctionnalite");
Route::get('/corbeille_fonctionnalite', [FonctionnaliteController::class, 'corbeille_fonctionnalite'])->name("corbeille_fonctionnalite");
Route::post('/save_fonctionnalite', [FonctionnaliteController::class, 'save_fonctionnalite'])->name("save_fonctionnalite");
Route::get('/supprime_fonctionnalite_formule/{id}', [FonctionnaliteController::class, 'supprime_fonctionnalite_formule'])->name("supprime_fonctionnalite_formule");
Route::get('/edit_fonctionnalite_formule/{id}', [FonctionnaliteController::class, 'edit_fonctionnalite_formule'])->name("edit_fonctionnalite_formule");
Route::post('/update_fonctionnalite_formule/{id}', [FonctionnaliteController::class, 'update_fonctionnalite_formule'])->name("update_fonctionnalite_formule");

// setting
Route::get('/setting', [SettingController::class, 'setting'])->name("setting");
Route::post('/save_setting', [SettingController::class, 'save_setting'])->name("save_setting");
Route::post('/supprime_setting/{id}', [SettingController::class, 'supprime_setting'])->name("supprime_setting");
Route::get('/edit_setting/{id}', [SettingController::class, 'edit_setting'])->name("edit_setting");
Route::post('/update_setting/{id}', [SettingController::class, 'update_setting'])->name("update_setting");

//Partenaire 
Route::get('ajout_partenaire/', [PartenaireController::class,'ajout_partenaire'])->name('ajout_partenaire');
Route::post('/save_partenaire', [PartenaireController::class, 'save_partenaire'])->name("save_partenaire");
Route::get('/liste_partenaire', [PartenaireController::class, 'liste_partenaire'])->name("liste_partenaire");
Route::get('/supprime_partenaire/{id}', [PartenaireController::class, 'supprime_partenaire'])->name("supprime_partenaire");
Route::get('/edit_partenaire/{id}', [PartenaireController::class, 'edit_partenaire'])->name("edit_partenaire");
Route::post('/update_partenaire/{id}', [PartenaireController::class, 'update_partenaire'])->name("update_partenaire");

//Temoignage
Route::get('/ajout_temoignage', [TemoignageController::class, 'ajout_temoignage'])->name("ajout_temoignage");
Route::post('/save_temoignage', [TemoignageController::class, 'save_temoignage'])->name("save_temoignage");
Route::get('/liste_temoignage', [TemoignageController::class, 'liste_temoignage'])->name("liste_temoignage");
Route::get('/supprime_temoignage/{id}', [TemoignageController::class, 'supprime_temoignage'])->name("supprime_temoignage");
Route::get('/edit_temoignage/{id}', [TemoignageController::class, 'edit_temoignage'])->name("edit_temoignage");
Route::post('/update_temoignage/{id}', [TemoignageController::class, 'update_temoignage'])->name("update_temoignage");

// fonctionnalité N'Zassa SHOP
Route::get('/detail_nzassa_shop/{id}', [FonctionnaliteController::class, 'detail_nzassa_shop'])->name("detail_nzassa_shop");
Route::get('/detail_formule/{id}', [FonctionnaliteController::class, 'detail_formule'])->name("detail_formule");

// Bannière
Route::post('/save_banniere', [BanniereController::class, 'save_banniere'])->name("save_banniere");
Route::get('/ajout_banniere', [BanniereController::class, 'ajout_banniere'])->name("ajout_banniere");
Route::get('/liste_banniere', [BanniereController::class, 'liste_banniere'])->name("liste_banniere");
Route::get('/supprime_banniere/{id}', [BanniereController::class, 'supprime_banniere'])->name("supprime_banniere");
Route::get('/edit_banniere/{id}', [BanniereController::class, 'edit_banniere'])->name("edit_banniere");
Route::post('/update_banniere/{id}',  [BanniereController::class, 'update_banniere'])->name("update_banniere");

// Historique 
Route::get('/historique/', [FormuleController::class, 'historique'])->name("historique");


