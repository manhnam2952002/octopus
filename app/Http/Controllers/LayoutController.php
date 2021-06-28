<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    //
    public function home(){
        return view('octopus.index');
    }

    public function list(){
        return view('octopus.list');
    }

    public function form(){
        return view('octopus.form');
    }

    public function calenbar(){
        return view('octopus.calenbar');
    }

    public function ui_element(){
        return view('octopus.ui-element');
}
}
