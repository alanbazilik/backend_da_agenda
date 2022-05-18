<?php
namespace App\Http\Controllers;

use App\Models\agendas;
use Illuminate\Http\Request;

class  agendaController extends Controller
{
    public function index(Request $request){
        return agendas::all();
    }

    public function store(Request $request){
        return $request;
        return agendas::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'messagem' => $request->messagem
           
        ]);
    }

    public function show(Request $request, agendas $agendas){
        return $agendas;
    } 
    public function delete(agendas $agendas){
        $agendas->delete();
    }
}

