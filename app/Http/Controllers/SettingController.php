<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;

class SettingController extends Controller
{
    // Fonction d'ajout 
    public function save_setting (Request $request){

        $donnee = [
            "cle" => $request->cle,
            "valeur" => $request->valeur,
        ];

        Setting::create($donnee);
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
        $setting = Setting::where("id","=",$id)->update(
            $donnee = [
            "cle" => $request->cle,
            "valeur" => $request->valeur,
        ]);
        return redirect()->route('setting');
    }
}
