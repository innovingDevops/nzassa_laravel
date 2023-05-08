<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;

class SettingController extends Controller
{
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
}
