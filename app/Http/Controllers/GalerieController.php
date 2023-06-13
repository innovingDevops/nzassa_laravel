<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class GalerieController extends Controller
{
    public function ajout_galerie(){
        return view("page/admin0/ajout_galerie");
    }

    // insertion de données article
    public function save_galerie(Request $request){
        
        $path_image_galerie = $request->file('image_galerie')->store('image_galerie/', 'public');
        $path_galerie = $request->file('image_galerie')->store('image_galerie/', 'public');

        $donnee = [
            "image_galerie" => $path_galerie,
        ];
        Galerie::create($donnee);
        Session::flash('success', 'La galerie a été ajoutée avec succès.');
        return redirect()->route('ajout_galerie')->with('success', 'La galerie a été ajoutée avec succès.');
        
    }

    public function liste_galerie():View{
        $galeries = DB::table('galeries')->get();
        return view("page/admin0/liste_galerie", ['galeries' => $galeries]);
    }

    public function supprime_galerie($id){
        $galerie = Galerie::find($id);
        $galerie->delete();
        Session::flash('success', 'Vous venez de supprimer une photo de la galerie');
        return redirect()->route('liste_galerie')->with('success', 'Vous venez de supprimer une photo de la galerie.');
    }
    
    public function edit_galerie($id){
        $galerie = Galerie::find($id);
        return view("page/admin0/edit_galerie", ['galerie' => $galerie ]);
    }

    public function update_galerie(Request $request, $id)
    {
    $galerie = Galerie::findOrFail($id);

    // Vérifiez si une nouvelle image de galerie a été téléchargée
    if ($request->hasFile('image_galerie')) {
        // Supprimez l'ancienne image de la galerie du stockage si nécessaire
        Storage::delete($galerie->image_galerie);
        
        // Téléchargez et enregistrez la nouvelle image de la galerie
        $path_image_galerie = $request->file('image_galerie')->store('image_galerie/', 'public');
        $galerie->image_galerie = $path_image_galerie;
    }
    $galerie->save();
    Session::flash('success', 'La mise à jour a été effectuée.');
    return redirect()->route('liste_galerie')->with('success', 'La mise à jour a été effectuée.');
    }
        
}
