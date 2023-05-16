<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formule;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FormuleController extends Controller
{
    public function ajout_formule(){
        return view("page/admin0/ajout_formule");
    }

    public function liste_formule(){
        $formules = DB::table('formules')->get();
        return view("page/admin0/liste_formule", ['formules'=> $formules]);
    }

    public function corbeille_formule(){
        return view("page/admin0/corbeille_formule");
    }

    public function home(){
        $formules = DB::table('formules')->get();
        $teams = DB::table('teams')->get();
        $departements = DB::table('departements')->get();
        $galeries = DB::table('galeries')->get();
        $settings = DB::table('settings')->get();
        $articles = DB::table('articles')->orderByDesc('id')->take(4)->get();
        return view("page/client/index", 
        [
            'formules' => $formules,
            'teams' => $teams,
            'galeries' => $galeries,
            'departements' => $departements,
            'settings' => $settings,
            'articles' => $articles
        ]);
        // return view("page/client/index");
    }

    public function save_formule (Request $request){
        $path_logo = $request->file('logo_formule')->store('formule/logo/', 'public');
        $path_image = $request->file('image_formule')->store('formule/image/', 'public');
        $donnee = [
            "logo_formule" => $path_logo,
            "nom_formule" => $request->nom_formule,
            "titre_formule" => $request->titre_formule,
            "image_formule" => $path_image,
            "description_formule" => $request->description_formule,
        ];
        Formule::create($donnee);
        // return redirect()->route("liste_formule");
        return $this->show_formule();
    }
    public function show_formule(): View{
        $formules = DB::table('formules')->get();
        return view("page/admin0/liste_formule", ['formules' => $formules]);
    }
    public function supprime_formule($id){
        
        $formule = Formule::find($id);
        $formule->delete();
        return redirect()->route('liste_formule');
    }
}
