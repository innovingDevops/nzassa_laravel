<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;

class DepartementController extends Controller
{

    public function ajout_departement():View{
        $departements = DB::table('departements')->get();
        return view("page/admin0/ajout_departement", ['departements' => $departements]);
    }
    // insertion de données 
    public function save_departement(Request $request){
        // me retourne le chemin du fichier
        $donnee = [
            "libelle_departement" => $request->libelle_departement,
        ];
        Departement::create($donnee);
        // return redirect()->route('ajout_departement');
        Session::flash('success', 'Le departement a été ajouté avec succès.');
        return redirect()->route('ajout_departement')->with('success', 'Le departement a été ajouté avec succès.');
    }
    //    // récupération données 
    // public function show_departement(): View{
    //     $teams = DB::table('teams')->get();
    //     return view("page/admin0/liste_departement", ['teams' => $teams]);
    // }
        public function supprime_departement($id){
            $departement = Departement::find($id);
            $departement->delete();
            return redirect()->route("ajout_departement");
        }

        public function edit_departement($id){
            $departement = Departement::find($id);
            return view('page/admin0/edit_departement', ['departement' => $departement]);
        }
        public function update_departement(Request $request,$id){
            $departement = Departement::where("id","=",$id)->update(
                $donnee = [
                "libelle_departement" => $request->libelle_departement,
            ]);
            return redirect()->route('ajout_departement');
        }
}
