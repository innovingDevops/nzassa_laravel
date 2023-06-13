<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fonctionnalite_formule;
use App\Models\Formule;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

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
        Session::flash('success', 'La fonctionnalité a été ajoutée avec succès.');
        return redirect()->route('ajout_fonctionnalite')->with('success', 'La fonctionnalité a été ajoutée avec succès.');
        // return $this->liste_fonctionnalite();
    }
    // public function show_fonctionnalite(): View{
    //     $formules = DB::table('formules')->get();
    //     return view("page/admin0/liste_fonctionnalite", ['formules' => $formules]);
    // }
        public function supprime_fonctionnalite_formule($id){
            $fonctionnalite = Fonctionnalite_formule::find($id);
            $fonctionnalite->delete();
            Session::flash('success', 'Vous venez de supprimer une fonctionnalité');
            return redirect()->route('liste_fonctionnalite')->with('success', 'Vous venez de supprimer une fonctionnalité.');
        }

        public function edit_fonctionnalite_formule($id){
            $formules = DB::table('formules')->get();
            $fonctionnalite_formule = Fonctionnalite_formule::find($id);
            return view("page/admin0/edit_fonctionnalite_formule", ['formules' => $formules, 'fonctionnalite_formule' => $fonctionnalite_formule]);
        }

        public function update_fonctionnalite_formule(Request $request, $id){

            $fonctionnalite_formule = DB::table('fonctionnalite_formules')->where('id','=',$id)->first();
             // Vérifiez si une nouvelle image de logo a été téléchargée
            if ($request->hasFile('image_fonctionnalite')) {
                // Supprimez l'ancienne image de logo du stockage si nécessaire
                Storage::delete($fonctionnalite_formule->image_fonctionnalite);

                // Téléchargez et enregistrez la nouvelle image de logo
                $image_fonctionnalite = $request->file('image_fonctionnalite')->store('image_fonctionnalite', 'public');
                $donnee['image_fonctionnalite'] = $image_fonctionnalite;
            }
            $donnee['id_formule'] = $request->id_formule;
            $donnee['libelle_fonctionnalite'] = $request->libelle_fonctionnalite;
            $donnee['ordre_fonctionnalite'] = $request->ordre_fonctionnalite;
            $donnee['description_fonctionnalite'] = $request->description_fonctionnalite;

            // Affiche un warning quand il y a un champ qui est vide 
            if (empty($donnee['libelle_fonctionnalite']) || empty($donnee['ordre_fonctionnalite']) || empty($donnee['description_fonctionnalite'])){
                Session::flash('warning', 'Vous devez absolument remplir tous les champs');
                return redirect()->route('edit_fonctionnalite_formule', ['id' => $id])->with('warning', 'Vous devez absolument remplir tous les champs');
            }   

            DB::table('fonctionnalite_formules')->where('id','=', $id)->update($donnee);
            Session::flash('success', 'La mise à jour a été effectuée.');
            return redirect()->route('liste_fonctionnalite')->with('success', 'La mise à jour a été effectuée.');
        }

        public function detail_formule($id){
            $formule =  Formule::find($id);
            $formules = DB::table('formules')->get();
            $fonctionnalites = DB::table('fonctionnalite_formules')->get();
            // dd($fonctionnalites);
            return view('page/client/detail_formule', ['formule' => $formule, 'fonctionnalites' => $fonctionnalites, 'formules' => $formules]);
        }
    }
    
