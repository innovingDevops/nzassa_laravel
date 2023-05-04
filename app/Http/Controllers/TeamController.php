<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class TeamController extends Controller
{
    public function ajout_team():View{
        $departements = DB::table('departements')->get();
        return view("page/admin0/ajout_team", ['departements' => $departements]);
    }

    public function liste_team(){
        $teams = DB::table('teams')->get();
        return view("page/admin0/liste_team", ['teams' => $teams]);
        
    }
    // insertion de données 
    public function save_team(Request $request){

        // me retourne le chemin du fichier
        $path_team = $request->file('image')->store('image_team/', 'public');
        
        $donnee = [
            "image" => $path_team,
            "nom" => $request->nom,
            "fonction" => $request->fonction,
            "id_departement" => $request->id_departement,
        ];
        Team::create($donnee);
        // return redirect()->route('liste_team');
        return $this->show_team();
    }
       // récupération données 
    public function show_team(): View{
        $teams = DB::table('teams')->get();
        return view("page/admin0/liste_team", ['teams' => $teams]);
    }


}
