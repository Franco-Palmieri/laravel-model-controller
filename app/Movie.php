<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //in maniera automatica la classe model crea tutte
    // le proprietà che sono all'interno della classe Movie,
    //che corrispondono alle colonne dentro il database(tabella)

    /*
    senza dover scrivere:
    public $id;
    public $title; ecc
    
    PER OGNI TABELLA CI VUOLE UN MODEL

    
    se la tabella si chiamasse in modo diverso da Movie al plurale
    bisogna inserire la funzione:
    protected $table = "nome_tabella";
    
     */
}
