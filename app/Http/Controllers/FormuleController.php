<?php

namespace App\Http\Controllers;

use App\Models\Banniere;
use Illuminate\Http\Request;
use App\Models\Formule;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class FormuleController extends Controller
{
    public function ajout_formule(){
        return view("page/admin0/ajout_formule");
    }

    public function liste_formule(){
        $formules = DB::table('formules')->orderBy('priority')->get();
        return view("page/admin0/liste_formule", ['formules'=> $formules]);
    }

    public function corbeille_formule(){
        return view("page/admin0/corbeille_formule");
    }

    public function home(){
        $bannieres = DB::table('bannieres')->get();
        $formules = DB::table('formules')->orderBy('priority')->get();
        $teams = DB::table('teams')->get();
        $departements = DB::table('departements')->get();
        $galeries = DB::table('galeries')->get();
        $settings = DB::table('settings')->get();
        $articles = DB::table('articles')->orderByDesc('id')->take(4)->get();
        $partenaires = DB::table('partenaires')->get();
        $temoignages = DB::table('temoignages')->get();
        return view("page/client/index", 
        [
            'temoignages' => $temoignages,
            'partenaires' => $partenaires,
            'formules' => $formules,
            'teams' => $teams,
            'galeries' => $galeries,
            'departements' => $departements,
            'settings' => $settings,
            'articles' => $articles,
            'bannieres' => $bannieres,
        ]);
        // return view("page/client/index");
    }

    public function save_formule (Request $request){
        $path_logo = $request->file('logo_formule')->store('formule/logo/', 'public');
        $path_image = $request->file('image_formule')->store('formule/image/', 'public');
        $donnee = [
            "priority" => $request->priority,
            "logo_formule" => $path_logo,
            "nom_formule" => $request->nom_formule,
            "titre_formule" => $request->titre_formule,
            "image_formule" => $path_image,
            "description_formule" => $request->description_formule,
        ];

        Formule::create($donnee);
        Session::flash('success', 'La formule a été ajoutée avec succès.');
        return redirect()->route('ajout_formule')->with('success', 'La formule a été ajoutée avec succès.');
        return redirect()->route("ajout_formule");
        // return $this->show_formule();
    }
    
    public function show_formule(): View{
        $formules = DB::table('formules')->get();
        return view("page/admin0/liste_formule", ['formules' => $formules]);
    }

    public function supprime_formule($id){
        
        $formule = Formule::find($id);
        $formule->delete();
        Session::flash('success', 'Vous venez de supprimer une formule ');
        return redirect()->route('liste_formule')->with('success', 'Vous venez de supprimer une formule.');
    }

     // Fonction de modification
    public function edit_formule($id){
        $formule = Formule::find($id);
        return view("page/admin0/edit_formule", ['formule' => $formule]);
    }

    // fonction de update des formules 
    public function update_formule(Request $request, $id)
    {
        $formule = DB::table('formules')->where('id', $id)->first();

        // Vérifiez si une nouvelle image de logo a été téléchargée
        if ($request->hasFile('logo_formule')) {
            // Supprimez l'ancienne image de logo du stockage si nécessaire
            Storage::delete($formule->logo_formule);

            // Téléchargez et enregistrez la nouvelle image de logo
            $logoPath = $request->file('logo_formule')->store('images', 'public');
            $donnee['logo_formule'] = $logoPath;
        }

        // Vérifiez si une nouvelle image a été téléchargée
        if ($request->hasFile('image_formule')) {
            // Supprimez l'ancienne image du stockage si nécessaire
            Storage::delete($formule->image_formule);

            // Téléchargez et enregistrez la nouvelle image
            $imagePath = $request->file('image_formule')->store('image_formule', 'public');
            $donnee['image_formule'] = $imagePath;
        }

        // Mettez à jour les autres champs de la formule
            $donnee['priority'] = $request->priority;
            $donnee['nom_formule'] = $request->nom_formule;
            $donnee['titre_formule'] = $request->titre_formule;
            $donnee['description_formule'] = $request->description_formule;

         // Affiche un warning quand il y a un champ qui est vide 
        if (empty($donnee['nom_formule']) || empty($donnee['titre_formule']) || empty($donnee['description_formule']) || empty($donnee['priority'])){
            Session::flash('warning', 'Vous devez absolument remplir tous les champs');
            return redirect()->route('edit_formule', ['id' => $id]);
        }  

        // Effectuez la mise à jour de la formule
            DB::table('formules')->where('id', $id)->update($donnee);
            Session::flash('success', 'La mise à jour a été effectuée.');
            return redirect()->route('liste_formule')->with('success', 'La mise à jour a été effectuée.');
    }
}