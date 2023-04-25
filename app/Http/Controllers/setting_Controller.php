<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class setting_Controller extends Controller
{
    public function setting(){
        return view("page/admin0/setting");
    }
}
