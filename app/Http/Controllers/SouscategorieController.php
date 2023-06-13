<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sous_categorie;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;

class SouscategorieController extends Controller
{
    public function ajout_sous_categorie(){
        $categories = DB::table('categories')->get();
        return view("page/admin0/ajout_sous_categorie", ['categories' => $categories]);
    }

    public function corbeille_sous_categorie(){
        return view("page/admin0/corbeille_sous_categorie");
    }

     // insertion de données 
    public function save_sous_categorie(Request $request){
        $donnee = [
            "id_categorie" => $request->id_categorie,
            "nom_souscategorie" => $request->nom_souscategorie,
            "description_souscategorie" => $request->description_souscategorie,
        ];
        Sous_categorie::create($donnee);
        Session::flash('success', 'La sous categorie a été ajoutée avec succès.');
        return redirect()->route('ajout_sous_categorie')->with('success', 'La sous categorie a été ajoutée avec succès.');
    }

    // récupération données 
    public function liste_sous_categorie(): View{
        $sous_categories = DB::table('sous_categories')->get();
        return view("page/admin0/liste_sous_categorie", ['sous_categories' => $sous_categories]);
    }
    public function sous_cat(Request $request){
        $sous_categories = DB::table('sous_categories')->where("id_categorie", "=",$request->id_categorie)->get();

        $output = "";
        foreach($sous_categories as $souscategorie){
            $output .= "<option value=".$souscategorie->id.">".$souscategorie->nom_souscategorie."</option>";
        }
        return $output;
    }

    public function supprime_sous_categorie($id){
        $sous_categories = sous_categorie::find($id);
        $sous_categories->delete();
        Session::flash('success', 'Vous venez de supprimer une sous catégorie');
        return redirect()->route('liste_sous_categorie')->with('success', 'Vous venez de supprimer une sous catégorie.');
    }

      // Fonction de modification
      public function edit_sous_categorie($id){
        $categories = DB::table('categories')->get();
        $souscategorie = Sous_categorie::find($id);
        return view("page/admin0/edit_sous_categorie", ['souscategorie' => $souscategorie, 'categories' => $categories]);
    }

    // // Fonction de mise à jour 
    public function update_sous_categorie(Request $request, $id){
        $donnee = [
            "id_categorie" => $request->id_categorie,
            "nom_souscategorie" => $request->nom_souscategorie,
            "description_souscategorie" => $request->description_souscategorie,
        ];
            // Affiche un warning quand il y a un champ qui est vide 
        if (empty($donnee['nom_souscategorie']) || empty($donnee['description_souscategorie'])){
            Session::flash('warning', 'Vous devez absolument remplir tous les champs');
            return redirect()->route('edit_sous_categorie', ['id' => $id]);
        } 

        $souscategorie = Sous_categorie::where("id","=",$id)->update($donnee);
        Session::flash('success', 'La mise à jour a été effectuée.');
        return redirect()->route('liste_sous_categorie')->with('success', 'La mise à jour a été effectuée.');
    }
}
