<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main extends Controller
{
    //
    public function home(){
        return view("home.home");
    }
    public function about(){

        return view("about.about");
    }
    public function contact(){
        return view('Contact.contact');
    }
}
