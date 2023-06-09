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
            Session::flash('success', 'Vous venez de supprimer un département.');
            return redirect()->route('ajout_departement')->with('success', 'Vous venez de supprimer un département .');
        }

        public function edit_departement($id){
            $departement = Departement::find($id);
            return view('page/admin0/edit_departement', ['departement' => $departement]);
        }
        public function update_departement(Request $request,$id){
            $donnee = [
                "libelle_departement" => $request->libelle_departement,
            ];
            // Affiche un warning quand il y a un champ qui est vide 
            if(empty($donnee['libelle_departement'])){
                Session::flash('warning', 'Vous devez remplir tous les champs.');
                return redirect()->route('edit_departement', ['id' => $id])->with('warning', 'Vous devez remplir tous les champs.');
            }

            $departement = Departement::where("id","=",$id)->update($donnee);
            Session::flash('success', 'La mise à jour a été effectuée.');
            return redirect()->route('ajout_departement')->with('success', 'La mise à jour a été effectuée.');
        }
}
