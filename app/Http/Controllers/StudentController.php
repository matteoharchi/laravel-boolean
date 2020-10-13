<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $students;
    public function __construct(){
        $this->getAllStudents();
    }
    public function getAllStudents(){
        $this->students = config('students');
    }
    public function studenti(){
        $data = config('students');
        return view('studenti', compact('data'));
    }
    public function show($id){
        //verifico che l'id esista
        //se non esiste errore 404
        if (!array_key_exists($id, $this->students)){
            abort(404);
        }
        //se esiste stampa
        $student = $this->students[$id];
        return view('show', compact('student'));
    }

    //slug
    public function slug ($slug){
        //ciclo foreach per trovare elementi con quello slug
        foreach($this->students as $studente){
            if ($studente['slug'] == $slug) {
            //inserisco i corrispondenti all'interno di una variabile
                $student = $studente;
            //se trova corrispondenti, allora trovato=true
                $trovato = true;
            }
        }
        //quando la variabile $trovato=true mi mostra la pagina
        if($trovato){
            return view('slug', compact('student'));
        }else {//quando invece $trovato=false mi darà errore 404
            abort(404);
        }
    }

}
