<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class team_Controller extends Controller
{
    public function ajout_team(){
        return view("page/admin0/ajout_team");
    }

    public function liste_team(){
        return view("page/admin0/liste_team");
    }
}
