<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commentaire_Controller extends Controller
{
    public function approuve_commentaire(){
        return view("page/admin0/approuve_commentaire");
    }

    public function brouillon_commentaire(){
        return view("page/admin0/brouillon_commentaire");
    }
}
