<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\avalicao;

class avalicaoController extends Controller
{
    public function index(Request $request){
        return avalicao::all();
    }

    public function store(Request $request){

        return avalicao::create([
            'nome' => $request->nome,
            'messagem' => $request->messagem,
            'nota' => $request->nota
            
        ]);
    }

    public function show(Request $request, avalicao $avaliar){
        return $avaliar;
    } 
    public function delete( avalicao $avaliar){
        $avaliar->delete();
    }
}
