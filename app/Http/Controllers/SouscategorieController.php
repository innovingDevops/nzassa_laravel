<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sous_categorie;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SouscategorieController extends Controller
{
    public function ajout_sous_categorie(){
        return view("page/admin0/ajout_sous_categorie");
    }

    public function supprime_sous_categorie(){
        return view("page/admin0/supprime_sous_categorie");
    }

     // insertion de données 
    public function save_sous_categorie(Request $request){
        $donnee = [
            "categorie_id" => $request->categorie_id,
            "nom_souscategorie" => $request->nom_souscategorie,
            "description_souscategorie" => $request->description_souscategorie,
        ];
        Sous_categorie::create($donnee);
        return $this->liste_sous_categorie();
    }

    // récupération données 
    public function liste_sous_categorie(): View{
        $sous_categories = DB::table('sous_categories')->get();
        return view("page/admin0/liste_sous_categorie", ['sous_categories' => $sous_categories]);
    }

}
