<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class devis_Controller extends Controller
{
    public function approuve_devis(){
        return view("page/admin0/approuve_devis");
    }

    public function brouillon_devis(){
        return view("page/admin0/brouillon_devis");
    }
}
