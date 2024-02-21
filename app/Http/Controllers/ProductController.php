<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function fav_anime(){

        $anime = [
        'Hunter x Hunter',
        'Frieren the Slayer',
        'Solo Leveling',
        'Boku no Hero Academia',
        'Demon Slayer',
        ];

        return view('anime', ['anime' => $anime]);
    }
}
