<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function ajout_article(){
        $categories = DB::table('categories')->get();
        return view("page/admin0/ajout_article", ['categories' => $categories]);
    }

    public function supprime_article(){
        return view("page/admin0/supprime_article");
    }

    public function liste_commentaire_brouillon(){
        return view("page/admin0/liste_commentaire_brouillon");
    }

    public function blog(){
        $formules = DB::table('formules')->get();
        return view("page/client/blog", ['formules' => $formules]);
    }

    public function actualite(){
        $articles = DB::table('articles')->get();
        $formules = DB::table('formules')->get();
        $commentaires = DB::table('commentaires')->get();
        return view("page/client/actualite", ['articles' => $articles, 'formules' => $formules, 'commentaires' => $commentaires]);
    }

    // insertion de données article
    public function save_article(Request $request){
        
        $path = $request->file('image_article')->store('image_article/', 'public');

        $donnee = [
            "titre_article" => $request->titre_article,
            "courte_description" => $request->courte_description,
            "categorie" => $request->categorie,
            "sous_categorie" => $request->sous_categorie,
            "detail_article" => $request->detail_article,
            "image_article" => $path,
        ];
        Article::create($donnee);
        // return redirect()->route('liste_article');
        return $this->liste_article();
    }

     // récupération données 
    public function liste_article(): View{
        $articles = DB::table('articles')->get();
        return view("page/admin0/liste_article", ['articles' => $articles]);
    }
}
