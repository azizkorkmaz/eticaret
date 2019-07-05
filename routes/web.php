<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**Route::get('/', function () {
    return view('welcome');
});*/

/**sitring değer döndürme
Route::get("/merhaba", function(){
    return "Merhaba";
});

//json değerini döndürme --> dizi ile döndüre biliriz.
Route::get("/api/v1/merhaba", function (){
    return ["mesaj" => "Merhaba"];
});

//route ile parametre almak
Route::get("/urun/{urun_adi}", function($urun_adi){
    return "Ürün adı : $urun_adi";
});

//route a 2 parametre gnderme ve opsiyonel parametre göndeme
Route::get("/urun/{urun_adi}/{id?}", function($urun_adi, $id=0){
    return "Ürün adı: $id $urun_adi";
}) ->name("urun_detay");//burada isim verebiliriz

//route ta yönlendirme işlemi
Route::get("/kampanya", function(){
   return redirect()->route("urun_detay", ["id" =>7, "urun_adi" => "Portakal"]);//route parametrelerini dizi ile gönderiyoruz
});*/

/**Route::view("/kategori","kategori");
Route::view("/urun","urun");
Route::view("/sepet","sepet");*/


Route::group(["prefix" => "Admin", "namespace" => "Admin"], function (){

    Route::get("/login", "AdminController@login")->name("admin.oturumac");
});

Route::get("/", "AnasayfaController@index")->name("anasayfa");
Route::get("/kategori/{slug}", "CategoryController@index")->name("kategori");
Route::get("/urun/{slug_product_name}", "ProductController@index")->name("urun");
Route::get("/sepet","BasketController@index")->name("sepet");
Route::get("/odeme","PaymentController@index")->name("odeme");
Route::get("/siparisler", "OrderController@index")->name("siparisler");
Route::get("/siparisler/{id}", "OrderController@detay")->name("siparis");

Route::post("/ara","ProductController@ara")->name("urun_ara");
Route::get("/ara","ProductController@ara")->name("urun_ara");

Route::group(["prefix" => "kullanici"], function (){
    Route::get("/oturumac","UserContorller@giris_form")->name("kullanici.oturumac");
    Route::get("/kaydol", "UserContorller@kaydol_form")->name("kullanici.kaydol");
});

