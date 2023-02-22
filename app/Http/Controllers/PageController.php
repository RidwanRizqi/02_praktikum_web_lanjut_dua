<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        echo "Selamat Datang";
    }

    function about(){
        echo "NIM  : 2141720183 <br>";
        echo "Nama : Ridwan Caesar Rizqi Karisma Biwarni";
    }

    function articles($id){
        echo "Halaman Artikel dengan ID ".$id;
    }
}
