<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    /*//view yönlendirme
    public function index(){
        return view("anasayfa");
    }*/

    /*//parametre gönderme
    public function index(){
        return view("anasayfa" , ["isim" => "Aziz"]);
    }*/

    //parametre gönderme
    public function index(){
        $isim = "Aziz";
        $soyisim = "Korkmaz";
        return view("anasayfa", compact("isim", " soyisim"));
    }
}
