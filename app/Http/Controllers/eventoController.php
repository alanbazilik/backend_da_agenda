<?php
namespace App\Http\Controllers;

use App\Models\eventos;
use Illuminate\Http\Request;

class  eventoController extends Controller
{

    public function index(Request $request){
        return eventos::all();
    }

    public function store(Request $request){
       
        return Eventos::create([
            'nome_evento' => $request->nome_eventos,
            'Data' => $request->Data,
            'Hora' => $request->Hora,
            'messagem' => $request->messagem
           
        ]);
    }

    public function show(Request $request, eventos $eventos){
        return $eventos;
    } 
    public function delete(eventos $eventos){
        $eventos->delete();
    }
}

