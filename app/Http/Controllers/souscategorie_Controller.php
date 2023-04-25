<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class souscategorie_Controller extends Controller
{
    public function ajout_sous_categorie(){
        return view("page/admin0/ajout_sous_categorie");
    }

    public function liste_sous_categorie(){
        return view("page/admin0/liste_sous_categorie");
    }

    public function supprime_sous_categorie(){
        return view("page/admin0/supprime_sous_categorie");
    }
}
