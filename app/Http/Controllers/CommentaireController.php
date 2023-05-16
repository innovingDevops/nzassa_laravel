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


    public function blog():View{
        return view("page/client/blog");
    }
    // insertion de données commentaire
    public function save_commentaire(Request $request){
        $donnee = 
            [
                "id_article" => $request->id_article,
                "commentaire" => $request->commentaire,
                "email" => $request->email,
                "nom" => $request->nom,
                "status" => 1,
            ];
        Commentaire::create($donnee);
        $commentaires = DB::table('commentaires')->get();
        return redirect()->route("blog",['id' => $request->id_article ]);
    }

    public function liste_commentaire_brouillon(){
        $comments = DB::table('commentaires')->get();
        return view("page/admin0/liste_commentaire_brouillon", ['comments' => $comments]);
    }

    public function supprime_commentaire($id){
        $commentaires = Commentaire::find($id);
        $commentaires->delete();
        return redirect()->route('liste_commentaire_brouillon');
    }
}
