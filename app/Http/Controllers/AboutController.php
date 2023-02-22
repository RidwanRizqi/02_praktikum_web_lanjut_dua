<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        echo "NIM  : 2141720183 <br>";
        echo "Nama : Ridwan Caesar Rizqi Karisma Biwarni";
    }
}
