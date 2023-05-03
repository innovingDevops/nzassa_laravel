<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class GalerieController extends Controller
{
    public function ajout_galerie(){
        return view("page/admin0/ajout_galerie");
    }

    // insertion de données article
    public function save_galerie(Request $request){
        
        $path_image_galerie = $request->file('image_galerie')->store('image_galerie/', 'public');
        $path_galerie = $request->file('image_galerie')->store('image_galerie/', 'public');

        $donnee = [
            "image_galerie" => $path_galerie,
        ];
        Galerie::create($donnee);
        return $this->liste_galerie();
    }

    public function liste_galerie():View{
        $galeries = DB::table('galeries')->get();
        return view("page/admin0/liste_galerie", ['galeries' => $galeries]);
    }
}
