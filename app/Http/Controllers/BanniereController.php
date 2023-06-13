<?php

namespace App\Http\Controllers;

use App\Models\Banniere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;


class BanniereController extends Controller
{
    public function ajout_banniere(){

        return view("page/admin0/ajout_banniere");
    }

    public function save_banniere(Request $request){
        $path_image = $request->file('image_banniere')->store('image_banniere/', 'public');
        $donnee = [
            "image_banniere" => $path_image,
        ];

        Banniere::create($donnee);
        Session::flash('success', 'La bannière a été ajoutée avec succès.');
        return redirect()->route('ajout_banniere')->with('success', 'La bannière a été ajoutée avec succès.');
        return redirect()->route("ajout_banniere");
        // return $this->show_formule();
    }
    
    public function liste_banniere(){
        $bannieres = DB::table('bannieres')->get();
        return view("page/admin0/liste_banniere", ['bannieres'=> $bannieres]);
    }

    public function supprime_banniere($id){
        
        $banniere = Banniere::find($id);
        $banniere->delete();
        Session::flash('success', 'Vous venez de supprimer une bannière ');
        return redirect()->route('liste_banniere')->with('success', 'Vous venez de supprimer une bannière.');
    }

    public function edit_banniere($id){
        $banniere = Banniere::find($id);
        return view("page/admin0/edit_banniere", ['banniere' => $banniere]);
    }

    public function update_banniere(Request $request, $id)
    {
    $banniere = Banniere::findOrFail($id);

    // Vérifiez si une nouvelle image de galerie a été téléchargée
    if ($request->hasFile('image_banniere')) {
        // Supprimez l'ancienne image de la galerie du stockage si nécessaire
        Storage::delete($banniere->image_banniere);
        
        // Téléchargez et enregistrez la nouvelle image de la galerie
        $path_image_banniere = $request->file('image_banniere')->store('image_banniere/', 'public');
        $banniere->image_banniere = $path_image_banniere;
    }
    $banniere->save();
    Session::flash('success', 'La mise à jour a été effectuée.');
    return redirect()->route('liste_banniere')->with('success', 'La mise à jour a été effectuée.');
    }
    
}