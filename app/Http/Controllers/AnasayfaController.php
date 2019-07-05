<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category; //category modelini kullanabilmek için
use App\Models\ProductDetail;

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

   /** //parametre gönderme
    public function index(){
        $isim = "Aziz";
        $isimler = ["Aziz", "Ahmet", "İsmail", "Hacı"];
        $kullanicilar =[
            ["id" => 1, "kullanici_adi" => "Aziz"],
            ["id" => 2, "kullanici_adi" => "Ahmet"],
            ["id" => 3, "kullanici_adi" => "İsmail"],
            ["id" => 4, "kullanici_adi" => "Hacı"]
        ];
        //$soyisim = "Korkmaz";
        return view('anasayfa', compact('isim', 'isimler', "kullanicilar"));
    }*/

   public function index()
   {
       $categories = Category::whereRaw("parent_id is null")->take(8)->get();//limit belirtiyoruz

       $product_slider = ProductDetail::with("product")->where("show_slider", 1)->take(5)->get();

       $product_chanceOfDay = Product::join("product_details", "product_details.product_id", "products.id")
           ->where("product_details.show_chanceOfDay", 1)
           ->orderby("product_details.updated_at", "desc")
           ->first();

       $product_featured = ProductDetail::with("product")->where("show_featured", 1)->take(4)->get();
       $product_bestseller = ProductDetail::with("product")->where("show_bestseller", 1)->take(4)->get();
       $product_reduced = ProductDetail::with("product")->where("show_reduced", 1)->take(4)->get();

       return view("anasayfa", compact("categories", "product_slider", "product_chanceOfDay",
           "product_bestseller", "product_featured", "product_reduced"));
   }
}


