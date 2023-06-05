<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temoignage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\returnSelf;

class TemoignageController extends Controller
{
    public function ajout_temoignage():View{
        
        return view("page/admin0/ajout_temoignage");
    }

    public function liste_temoignage(){
        $temoignages = DB::table('temoignages')->get();
        return view("page/admin0/liste_temoignage", ['temoignages' => $temoignages]);
        
    }
    // insertion de données 
    public function save_temoignage(Request $request){

        // me retourne le chemin du fichier
        $path_temoignage = $request->file('image_temoignage')->store('image_temoignage/', 'public');
        
        $donnee = [
            "image_temoignage" => $path_temoignage,
            "nom_temoignage" => $request->nom_temoignage,
            "profession_temoignage" => $request->profession_temoignage,
            "detail_temoignage" => $request->detail_temoignage,
        ];

        Temoignage::create($donnee);
        Session::flash('success', 'Vous venez d\'ajouter un témoignage sur Innoving.');
        return redirect()->route('ajout_temoignage')->with('success', 'Vous venez d\'ajouter un témoignage sur Innoving.');

        // return $this->show_temoignage();
    }
       // récupération données 
    // public function show_temoignage(): View{
    //     $temoignages = DB::table('temoignages')->get();
    //     return view("page/admin0/liste_temoignage", ['temoignages' => $temoignages]);
    // }

    public function supprime_temoignage($id){
        $temoignage = Temoignage::find($id);
        $temoignage->delete();
        Session::flash('success', 'Vous venez de supprimer un témoignage');
        return redirect()->route('liste_temoignage')->with('success', 'Vous venez de supprimer un témoignage.');
    }

    public function edit_temoignage($id){
        $temoignage = Temoignage::find($id);
        return view("page/admin0/edit_temoignage", ['temoignage' => $temoignage]);
    }

    public function update_temoignage(Request $request, $id){
        $temoignage = DB::table('temoignages')->where('id','=',$id)->first();
        if($request->hasFile('image')){
            Storage::delete($temoignage->image_temoignage);

            $image_temoignage = $request->file('image_temoignage')->store('image_temoignages', 'public');
            $donnee['image_temoignage'] = $image_temoignage;
        }
        $donnee['nom_temoignage'] = $request->nom_temoignage;
        $donnee['profession_temoignage'] = $request->profession_temoignage;
        $donnee['detail_temoignage'] = $request->detail_temoignage;
        DB::table('temoignages')->where('id','=',$id)->update($donnee);
        Session::flash('success', 'La mise à jour a été effectuée.');
        return redirect()->route('liste_temoignage')->with('success', 'La mise à jour a été effectuée.');
    } 
      
}
