<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galerie_Controller extends Controller
{
    public function ajout_galerie(){
        return view("page/admin0/ajout_galerie");
    }

    public function liste_galerie(){
        return view("page/admin0/liste_galerie");
    }

}
