<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        /*se volessi inviare dei dati alla home bisognerebbe spalmarli:

        $dato => 'value';
        $dato2 => 'value';
        $dato3 => 'value';

        return view('home',
        [
            'dato' => $dato,
            'dato2' => $dato2,
            ecc
        ]);
        oppure con compact per semplificare:
        return view('home', compact('dato', 'dato2', 'dato3'));
        */
        return view ('home');
    }
}
