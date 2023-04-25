<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formule_Controller extends Controller
{
    public function ajout_formule(){
        return view("page/admin0/ajout_formule");
    }

    public function liste_formule(){
        return view("page/admin0/liste_formule");
    }

    public function supprime_formule(){
        return view("page/admin0/supprime_formule");
    }

    public function home(){
        return view("page/client/index");
    }
}
