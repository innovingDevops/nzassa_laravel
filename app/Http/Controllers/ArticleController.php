<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    public function ajout_article(){
        $categories = DB::table('categories')->get();
        return view("page/admin0/ajout_article", ['categories' => $categories]);
    }

    public function supprime_article($id){
        $article = Article::find($id);
        $article->delete();
        Session::flash('success', 'Vous venez de supprimer un article.');
        return redirect()->route('liste_article')->with('success', 'Vous venez de supprimer un article.');
    }
    
    public function liste_commentaire_brouillon(){
        return view("page/admin0/liste_commentaire_brouillon");
    }

    public function blog(Request $request) {
        $article = Article::find($request->id);
    
        if ($article) {
            $id_article = $article->id;
            $formules = DB::table('formules')->get();
            $categories = DB::table('categories')->get();
            $commentaires = DB::table('commentaires')->where('status', 1)
                                                    ->where('id_article', $id_article)
                                                    ->get();
    
            return view("page/client/blog", ['formules' => $formules, 'article' => $article, 'categories' => $categories, 'commentaires' => $commentaires]);
        } else {
            return $this->actualite();
        }
    }

    public function actualite(){
        $articles = Article::paginate(4);

        // $count_article = Article::all()->count();
        // $articles = DB::table('articles')->get();

        $formules = DB::table('formules')->get();
        $categories = DB::table('categories')->get();
        return view("page/client/actualite", ['articles' => $articles, 'formules' => $formules, 'categories' => $categories]);
    }

    // insertion de données article
    public function save_article(Request $request){
        
        $path = $request->file('image_article')->store('image_article/', 'public');

        $donnee = [
            "titre_article" => $request->titre_article,
            "courte_description" => $request->courte_description,
            "id_categorie" => $request->id_categorie,
            "id_sous_categorie" => $request->id_sous_categorie,
            "detail_article" => $request->detail_article,
            "image_article" => $path,
        ];
        Article::create($donnee);
        Session::flash('success', 'L\'article a été ajoutée avec succès.');
        return redirect()->route('ajout_article')->with('success', 'L\'article a été ajoutée avec succès.');
        // return $this->liste_article();
    }

     // récupération données 
    public function liste_article(): View{
        $articles = DB::table('articles')->get();
        return view("page/admin0/liste_article", ['articles' => $articles]);
    }

    public function edit_article($id){
        $categories = DB::table('categories')->get();
        $article = Article::find($id);
        $id_categorie = $article->id_categorie;
        $sous_categories = DB::table('sous_categories')->where('id_categorie','=',$id_categorie)->get();
        
        return view("page/admin0/edit_article", ['article' => $article, 'categories' => $categories, 'sous_categories' => $sous_categories]);
    }

    public function update_article(Request $request, $id){
        $article = Article::find($id);
        if($request->hasFile('image_article')){
            Storage::delete($article->image_article);

            $path_article = $request->file('image_article')->store('image_article', 'public');
            $donnee['image_article'] = $path_article;   
        }
        $donnee['titre_article'] = $request->titre_article;
        $donnee['courte_description'] = $request->courte_description;
        $donnee['id_categorie'] = $request->id_categorie;
        $donnee['id_sous_categorie'] = $request->id_sous_categorie;
        $donnee['detail_article'] = $request->detail_article;

        // Affiche un warning quand il y a un champ qui est vide 
        if (empty($donnee['titre_article']) || empty($donnee['courte_description']) || empty($donnee['detail_article'])){
            Session::flash('warning', 'Vous devez absolument remplir tous les champs');
            return redirect()->route('edit_article', ['id' => $id])->with('warning', 'Vous devez absolument remplir tous les champs');
        }   
        
        DB::table('articles')->where('id',$id)->update($donnee);     
        Session::flash('success', 'La mise à jour a été effectuée.');
        return redirect()->route('liste_article')->with('success', 'La mise à jour a été effectuée.');
    }
}
