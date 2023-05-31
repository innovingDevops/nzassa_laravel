<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Departement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\returnSelf;

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
        Session::flash('success', 'Vous venez d\'ajouter un membre de la team Innoving.');
        return redirect()->route('ajout_team')->with('success', 'Vous venez d\'ajouter un membre de la team Innoving.');
        // return $this->show_team();
    }
       
    public function show_team(): View{
        $teams = DB::table('teams')->get();
        return view("page/admin0/liste_team", ['teams' => $teams]);
    }

    public function supprime_team($id){
        $team = Team::find($id);
        $team->delete();
        return redirect()->route('liste_team');
    }

    public function edit_team($id){
        $departements = DB::table('departements')->get();
        $team = Team::find($id);
        return view("page/admin0/edit_team", ['team' => $team, 'departements' => $departements]);
    }

    public function update_team(Request $request, $id){
        $team = DB::table('teams')->where('id','=',$id)->first();
        if($request->hasFile('image')){
            Storage::delete($team->image);

            $image_team = $request->file('image')->store('image_teams', 'public');
            $donnee['logo_formule'] = $image_team;
        }
        $donnee['nom'] = $request->nom;
        $donnee['fonction'] = $request->fonction;
        $donnee['id_departement'] = $request->id_departement;
        DB::table('teams')->where('id','=',$id)->update($donnee);
        return redirect()->route('liste_team'); 
    } 

//     public function team_interface_client (){
//         $teams = Team::paginate(4);
//         $departements = DB::table('departements')->get();
//         $formules = DB::table('formules')->get();
//         return view("page/client/team_interface_client", ['teams' => $teams, 'departements' => $departements, 'formules' => $formules]);
//     }

//     public function teambydep($id)
// {
//     $formules = DB::table('formules')->get();
//     $id_departement = Departement::find($id);
//     $teams = $id_departement->teams ()->paginate(6);
//     $departements = DB::table('departements')->get();

//     return view('page/client/teambydep', ['formules' => $formules,'id_departement' => $id_departement, 'teams' => $teams, 'departements' => $departements]);
    
// }     
}
