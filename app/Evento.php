<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $primaryKey = 'idevento';
    
    protected $fillable = [
        'titulo', 
        'descricao', 
        'data', 
        'id_artista', 
        'id_contratante', 
        'duracaoEvento'
    ];
}
