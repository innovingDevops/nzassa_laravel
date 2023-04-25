<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class article_Controller extends Controller
{
    public function ajout_article(){
        return view("page/admin0/ajout_article");
    }

    public function liste_article(){
        return view("page/admin0/liste_article");
    }

    public function supprime_article(){
        return view("page/admin0/supprime_article");
    }

    public function blog(){
        return view("page/client/blog");
    }

    public function actualite(){
        return view("page/client/actualite");
    }
}
