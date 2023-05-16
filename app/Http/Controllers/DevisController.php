<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devis;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
class DevisController extends Controller
{
    public function admin0 (){
        return view("page/admin0/index");
    }
    public function liste_devis_valide(){
        return view("page/admin0/liste_devis_valide");
    }


    public function contact(){
        $formules = DB::table('formules')->get();
        return view("page/client/contact", ['formules' => $formules]);
    }

    // insertion de données 
    public function save_devis(Request $request){
        // dd($request->nom_categorie);
        $donnee = [
            "nom_prenom" => $request->nom_prenom,
            "nom_societe" => $request->nom_societe,
            "nombre_employe" => $request->nombre_employe,
            "secteur_activite" => $request->secteur_activite,
            "email" => $request->email,
            "contact" => $request->contact,
            "formule" => $request->formule,
            "commentaire" => $request->commentaire,
        ];
        Devis::create($donnee);
        return redirect()->route('contact');
    }

    public function liste_devis_brouillon():View{
        $devis = DB::table('devis')->get();
        return view("page/admin0/liste_devis_brouillon", ['devis' => $devis]);
    }

    public function supprime_devis($id){
        $devis = Devis::find($id);
        $devis->delete();
        return redirect()->route('liste_devis_brouillon');
    }
}
