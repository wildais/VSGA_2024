<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        return "Hello World!"; 
    }

    public function les($pelatihan=null) {
        return "Selamat Belajar Laravel! di $pelatihan";
    }

    public function halamandts(){
        return view('dts')->with("course","Laravel");
    }
}