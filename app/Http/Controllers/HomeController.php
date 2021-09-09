<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//collego il movie.php
use App\Movie;

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
        $allMovies = Movie::all();
        
        //invio alla home il mio array dei libri senza doverlo spalmare
        return view('home', compact('allMovies'));
    }
}
