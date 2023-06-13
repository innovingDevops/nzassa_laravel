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
        Session::flash('success', 'Vous venez de supprimer un membre de team.');
        return redirect()->route('liste_team')->with('success', 'Vous venez de supprimer un membre de team.');
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

           // Affiche un warning quand il y a un champ qui est vide 
        if (empty($donnee['nom']) || empty($donnee['fonction'])){
            Session::flash('warning', 'Vous devez absolument remplir tous les champs');
            return redirect()->route('edit_team', ['id' => $id]);
        } 
        
        DB::table('teams')->where('id','=',$id)->update($donnee);
        Session::flash('success', 'La mise à jour a été effectuée.');
        return redirect()->route('liste_team')->with('success', 'La mise à jour a été effectuée.');
    } 
    
}
