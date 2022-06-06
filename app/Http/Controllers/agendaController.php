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
        
        return agendas::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'messagem' => $request->messagem
           
        ]);
    }
    public function edit($id) 
    {
        $request = agendas::findOrFail($id);
        return view('agendas.edit', ['agendas' => $request]);
    }
    public function update(Request $request, $id)
    {
        $request = agendas::findOrFail($id);
        $request->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'messagem' => $request->messagem
        ]);
        return redirect('agendas salvar');

    }
    public function show(Request $request, agendas $agendas){
        return $agendas;
    } 
    public function delete(agendas $agendas){
        $agendas->delete();
    }
}

