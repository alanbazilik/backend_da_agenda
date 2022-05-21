<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class eventos extends Model
{
    protected $fillable = [
        'nome_evento',
        'Data',
        'Hora',
        'messagem',
        
    ];
}
