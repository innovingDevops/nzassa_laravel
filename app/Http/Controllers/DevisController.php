<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Departement;
use App\Models\Sous_categorie;
use Illuminate\Http\Request;
use App\Models\Devis;
use App\Models\Formule;
use App\Models\Galerie;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
class DevisController extends Controller
{
    public function admin0 (){
        $categories = Categorie::all()->count();
        $sous_categories = Sous_categorie::all()->count();
        $articles = Article::all()->count();
        $formules = Galerie::all()->count();
        $teams = Team::all()->count();
        $departements = Departement::all()->count();
        $devis = Devis::all()->count();
        $galeries = Galerie::all()->count();
        
        return view("page/admin0/index", 
            [
                'categories' => $categories,
                'sous_categories' => $sous_categories,
                'articles' => $articles,
                'formules' => $formules,
                'teams' => $teams,
                'departements' => $departements,
                'galeries' => $galeries,
            ]);
    }
    public function liste_devis_valide(){
        return view("page/admin0/liste_devis_valide");
    }


    public function contact(){
        $formules = DB::table('formules')->get();
        return view("page/client/contact", ['formules' => $formules]);
    }

    // insertion de données 
    public function save_devis(Request $request){
        // dd($request->nom_categorie);
        $donnee = [
            "nom_prenom" => $request->nom_prenom,
            "nom_societe" => $request->nom_societe,
            "nombre_employe" => $request->nombre_employe,
            "secteur_activite" => $request->secteur_activite,
            "email" => $request->email,
            "contact" => $request->contact,
            "formule" => $request->formule,
            "commentaire" => $request->commentaire,
        ];
        Devis::create($donnee);
        return redirect()->route('contact');
    }

    public function liste_devis_brouillon():View{
        $devis = DB::table('devis')->get();
        return view("page/admin0/liste_devis_brouillon", ['devis' => $devis]);
    }

    public function supprime_devis($id){
        $devis = Devis::find($id);
        $devis->delete();
        return redirect()->route('liste_devis_brouillon');
    }
}