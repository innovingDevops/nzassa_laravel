<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fonctionnalite_formule;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FonctionnaliteController extends Controller
{
    public function ajout_fonctionnalite(){
        $formules = DB::table('formules')->get();
        return view("page/admin0/ajout_fonctionnalite", ['formules' => $formules] );
    }

    public function liste_fonctionnalite(){
        $fonctionnalite_formules = DB::table('fonctionnalite_formules')->get();
        return view("page/admin0/liste_fonctionnalite", ['fonctionnalite_formules' => $fonctionnalite_formules]);
        // return view("page/admin0/liste_fonctionnalite");
    }

    public function corbeille_fonctionnalite(){
        return view("page/admin0/corbeille_fonctionnalite");
    }

    public function home(){
        $formules = DB::table('formules')->get();
        $teams = DB::table('teams')->get();
        $galeries = DB::table('galeries')->get();
        return view("page/client/index", ['formules' => $formules,'teams' => $teams,'galeries' => $galeries ]);
        // return view("page/client/index");
    }

    public function save_fonctionnalite (Request $request){
        $path_image_fonctionnalite = $request->file('image_fonctionnalite')->store('image_fonctionnalite/', 'public');
        $donnee = [
            'id_formule'=> $request->id_formule,
            'libelle_fonctionnalite'=> $request->libelle_fonctionnalite,
            'image_fonctionnalite'=> $path_image_fonctionnalite,
            'ordre_fonctionnalite'=> $request->ordre_fonctionnalite,
            'description_fonctionnalite' => $request->description_fonctionnalite,
        ];
        Fonctionnalite_formule::create($donnee);
        return redirect()->route("liste_fonctionnalite");
        // return $this->liste_fonctionnalite();
    }
    // public function show_fonctionnalite(): View{
    //     $formules = DB::table('formules')->get();
    //     return view("page/admin0/liste_fonctionnalite", ['formules' => $formules]);
    // }
        public function supprime_fonctionnalite_formule($id){
            $fonctionnalite = Fonctionnalite_formule::find($id);
            $fonctionnalite->delete();
            return redirect()->route('liste_fonctionnalite');
        }
}
