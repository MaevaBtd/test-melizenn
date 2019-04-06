<?php

namespace App\Http\Controllers;


use \Illuminate\Http\Request;
use \DB;


class MainController extends Controller {

    public function home() {


        return view('home');
    }
}
