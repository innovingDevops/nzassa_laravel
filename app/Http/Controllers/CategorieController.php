<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;


class CategorieController extends Controller
{
    public function corbeille_categorie(){  
        return view("page/admin0/corbeille_categorie");
    }
    public function ajout_categorie(){
        return view("page/admin0/ajout_categorie");
    }

    // insertion de données 
    public function save_categorie(Request $request){
        // dd($request->nom_categorie);
        $donnee = [
            "nom_categorie" => $request->nom_categorie,
            "description_categorie" => $request->description_categorie,
        ];
        Categorie::create($donnee);
        
        Session::flash('success', 'La catégorie a été ajoutée avec succès.');
        return redirect()->route('ajout_categorie')->with('success', 'La catégorie a été ajoutée avec succès.');
        // return $this->liste_categorie();
    }

    public function liste_categorie(): View{
        $categories = DB::table('categories')->get();
        return view("page/admin0/liste_categorie", ['categories' => $categories]);
    }
   
    public function articlebycat($id)
    {   
        $count_article = Article::all()->count();
        $formules = DB::table('formules')->get();
        // Cette ligne de code permet de récupérer une catégorie à partir de son identifiant
        $categorie_id = Categorie::find($id);
        //Cette ligne de code utilise la relation articles() définie dans le modèle Categorie pour récupérer les articles liés à cette catégorie
        $articles = $categorie_id->articles()->paginate(4);
        // j'utilise cette ligne pour recupérer la liste des catégories. 
        $categories = DB::table('categories')->get();
        
        return view('page/client/articlebycat', ['count_article' => $count_article, 'categorie_id' => $categorie_id, 'articles' => $articles, 'formules' => $formules, 'categories' => $categories]);
    }

    // fonction de suppression 
    public function supprime_categorie($id){
        $categories = Categorie::find($id);
        $categories->delete();
        Session::flash('success', 'Vous venez de supprimer une catégorie.');
        return redirect()->route('liste_categorie')->with('success', 'Vous venez de supprimer une catégorie.');
    }

    // Fonction de modification
    public function edit_categorie($id){
        $categorie = Categorie::find($id);
        return view("page/admin0/edit_categorie", ['categorie' => $categorie]);
    }

    // Fonction de mise à jour 
    public function update_categorie(Request $request, $id)
    {
        $donnee = [
            "nom_categorie" => $request->nom_categorie,
            "description_categorie" => $request->description_categorie,
        ];
         // Affiche un warning quand il y a un champ qui est vide 
        if (empty($donnee['nom_categorie']) || empty($donnee['description_categorie'])) {
            Session::flash('warning', 'Vous devez remplir tous les champs.');
            return redirect()->route('edit_categorie', ['id' => $id])->with('warning', 'Vous devez remplir tous les champs.');
        }
    
        $categorie = Categorie::where("id", "=", $id)->update($donnee);
    
        Session::flash('success', 'La mise à jour a été effectuée.');
        return redirect()->route('liste_categorie')->with('success', 'La mise à jour a été effectuée.');
    }
    
}
