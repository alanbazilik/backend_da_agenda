<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class agendas extends Model{
    
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'messagem',
        
    ];
}