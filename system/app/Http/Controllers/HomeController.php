<?php 

namespace App\Http\Contollers;

class HomeController extends Controller{


    function showdetailproduk1(){
        return view('detailproduk1'); 
    }

    function showhome(){
        return view('home'); 
    }

    function showregister(){
        return view('register'); 
    }

    function showproduk(){
        return view('produk'); 
    }

    function showkontak(){
        return view('kontak'); 
    }

    function showcheckout(){
        return view('checkout'); 
    }

    function showtemplate(){
        return view('template.base'); 
    }

    function showchart(){
        return view('chart'); 
    }

    function showtable(){
        return view('table'); 
    }

    function showform(){
        return view('form'); 
    }

    function showkalender(){
        return view('kalender'); 
    }

    function showlogin(){
        return view('login'); 
    }
}