<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $primaryKey = 'idtipo_usuarios';
    
    protected $fillable = [
        'descricao'
    ];
}
