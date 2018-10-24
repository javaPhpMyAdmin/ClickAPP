<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Anuncio;

use Http\Requests\AnunciosFormRequest;
use DB;

class AnunciosController extends Controller
{
    public function __construct(){}
    
    public function index(Request $request){
        if ($request){
            //quito espacios en blanco con trim
           //$query = trim($request->get('CodAnunciante'));
           $anuncios = DB::table('anuncio')->get()
           ->orderby('CodAnunciante');
        
            return view('anuncios.index',["anuncios" => $anuncios]);
        }
    }

    public function create(){
        return view('anuncios.createAnuncio');
    }

    //public function store(AnunciosFormRequest $request){}
    
    public function show(){

    }

    public function edit(){

    }

    public function update(){}

    public function destroy(){}

}
