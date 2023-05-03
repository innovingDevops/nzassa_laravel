<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
class CommentaireController extends Controller
{
    public function liste_commentaire_valide(){
        return view("page/admin0/liste_commentaire_valide");
    }


    public function blog(){
        return view("page/client/blog");
    }
    // insertion de données commentaire
    public function save_commentaire(Request $request){
        $donnee = 
            [
                "commentaire" => $request->commentaire,
                "email" => $request->email,
                "nom" => $request->nom,
                "status" => 1,
            ];
        Commentaire::create($donnee);
        return $this->liste_commentaire_brouillon();
    }

    public function liste_commentaire_brouillon(): View{
        $commentaires = DB::table('commentaires')->get();
        return view("page/admin0/liste_commentaire_brouillon", ['commentaires' => $commentaires]);
    }
}
