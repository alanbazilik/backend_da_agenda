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
            'nome_eventos' => $request->nome_eventos,
            'Data' => $request->data,
            'Hora' => $request->hora,
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

