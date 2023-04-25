<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categorie_Controller extends Controller
{
    public function ajout_categorie(){
        return view("page/admin0/ajout_categorie");
    }

    public function liste_categorie(){
        return view("page/admin0/liste_categorie");
    }

    public function supprime_categorie(){
        return view("page/admin0/supprime_categorie");
    }
}
