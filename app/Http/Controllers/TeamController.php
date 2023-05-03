<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class TeamController extends Controller
{
    public function ajout_team(){
        return view("page/admin0/ajout_team");
    }

    public function liste_team(){
        return view("page/admin0/liste_team");
    }

    // insertion de données 
    public function save_team(Request $request){

        // me retourne le chemin du fichier
        $path_team = $request->file('image')->store('image_team/', 'public');
        
        $donnee = [
            "image" => $path_team,
            "nom" => $request->nom,
            "fonction" => $request->fonction,
            "departement" => $request->departement,
        ];
        Team::create($donnee);
        return redirect()->route('liste_team');
        // $this->show_team();
    }
       // récupération données 
    public function show_team(): View{
        $teams = DB::table('teams')->get();
        return view("page/admin0/liste_team", ['teams' => $teams]);
    }


}
