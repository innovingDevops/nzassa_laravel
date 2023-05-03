<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class CategorieController extends Controller
{
    public function ajout_categorie(){
        return view("page/admin0/ajout_categorie");
    }

    public function supprime_categorie(){
        return view("page/admin0/supprime_categorie");
    }

    // insertion de données 
    public function save_categorie(Request $request){
        // dd($request->nom_categorie);
        $donnee = [
            "nom_categorie" => $request->nom_categorie,
            "description_categorie" => $request->description_categorie,
        ];
        Categorie::create($donnee);
        // return redirect()->route('liste_categorie');
        return $this->liste_categorie();
    }

    public function liste_categorie(): View{
        $categories = DB::table('categories')->get();
        return view("page/admin0/liste_categorie", ['categories' => $categories]);
    }
}
