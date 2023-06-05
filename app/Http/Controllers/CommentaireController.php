<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;


class CommentaireController extends Controller
{
    public function liste_commentaire_valide(){
        $comments = DB::table('commentaires')->where('status',1)->get();
        return view("page/admin0/liste_commentaire_valide", ['comments' => $comments]);
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
                "status" => 0,
            ];
        Commentaire::create($donnee);
        $commentaires = DB::table('commentaires')->get();
        return redirect()->route("blog",['id' => $request->id_article ]);
    }

    public function liste_commentaire_brouillon(){
        $comments = DB::table('commentaires')->where('status',0)->get();
        return view("page/admin0/liste_commentaire_brouillon", ['comments' => $comments]);
    }

    public function supprime_commentaire($id){
        $commentaires = Commentaire::find($id);
        $commentaires->delete();
        Session::flash('success', 'Vous venez de supprimer un commentaire .');
        return redirect()->route('liste_commentaire_brouillon')->with('success', 'Vous venez de supprimer un commentaire.');
    }

    public function approuver_commentaire($id){
        $commentaire = Commentaire::find($id);
        $donnee['status'] = 1;
        DB::table('commentaires')->where('id',$id)->update($donnee);
        return redirect()->route('liste_commentaire_brouillon');
    }
}
