<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use App\Models\Partenaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class PartenaireController extends Controller
{
    public function ajout_partenaire(){
        return view("page/admin0/ajout_partenaire");
    }

    // insertion de données article
    public function save_partenaire(Request $request){
        $path_partenaire = $request->file('image_partenaire')->store('image_partenaire/', 'public');

        $donnee = [
            "image_partenaire" => $path_partenaire,
            "nom_partenaire" => $request ->nom_partenaire,
        ];
        Partenaire::create($donnee);
        Session::flash('success', 'Le partenaire a été ajouté avec succès.');
        return redirect()->route('ajout_partenaire')->with('success', 'Le partenaire a été ajouté avec succès.');
    }

    public function liste_partenaire():View{
        $partenaires = DB::table('partenaires')->get();
        return view("page/admin0/liste_partenaire", ['partenaires' => $partenaires]);
    }

    public function supprime_partenaire($id){
        $partenaire = Partenaire::find($id);
        $partenaire->delete();
        Session::flash('success', 'Vous venez de supprimer un partenaire');
        return redirect()->route('liste_partenaire')->with('success', 'Vous venez de supprimer un partenaire.');
    }

    public function edit_partenaire($id){
        $partenaire = Partenaire::find($id);
        return view("page/admin0/edit_partenaire", ['partenaire' => $partenaire ]);
    }

    public function update_partenaire(Request $request, $id)
    {
        $partenaire = Partenaire::findOrFail($id);

        // Vérifiez si une nouvelle image de galerie a été téléchargée
        if ($request->hasFile('image_partenaire')) {
            // Supprimez l'ancienne image de la galerie du stockage si nécessaire
            Storage::delete($partenaire->image_partenaire);
            
            // Téléchargez et enregistrez la nouvelle image de la galerie
            $path_partenaire = $request->file('image_partenaire')->store('image_partenaire/', 'public');
            $partenaire->image_partenaire = $path_partenaire;
        }

        $partenaire->save();
        Session::flash('success', 'La mise à jour a été effectuée.');
        return redirect()->route('liste_partenaire')->with('success', 'La mise à jour a été effectuée.');
    }   
        
}
