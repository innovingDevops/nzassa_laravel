<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    // Fonction d'ajout 
    public function save_setting (Request $request){

        $donnee = [
            "cle" => $request->cle,
            "valeur" => $request->valeur,
        ];

        Setting::create($donnee);
        Session::flash('success', 'Cet élément a été ajouté avec succès.');
        return redirect()->route('setting')->with('success', 'Cet élément a été ajouté avec succès.');
        return $this->setting();
    }

    public function setting(): View{
        $settings = DB::table('settings')->get();
        return view("page/admin0/setting", ['settings' => $settings]);
    }

    // fonction de suppression
    public function supprime_setting($id){
        $setting = Setting::find($id);
        $setting->delete;
        return redirect()->route("setting");
    }
    public function edit_setting($id){
        $setting = Setting::find($id);
        return view('page/admin0/edit_setting', ['setting' => $setting]);
    }
    public function update_setting(Request $request, $id){
        $donnee = [
            "cle" => $request->cle,
            "valeur" => $request->valeur,
        ];
        // Affiche un warning quand il y a un champ qui est vide 
        if (empty($donnee['cle']) || empty($donnee['valeur'])){
            Session::flash('warning', 'Vous devez absolument remplir tous les champs');
            return redirect()->route('edit_setting', ['id' => $id]);
        } 

        $setting = Setting::where("id","=",$id)->update($donnee);
        Session::flash('success', 'La mise à jour a été effectuée.');
        return redirect()->route('setting')->with('success', 'La mise à jour a été effectuée.');
        
    }
}
