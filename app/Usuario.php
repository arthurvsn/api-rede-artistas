<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $primaryKey = 'idusuarios';

    protected $fillable = [
        'nome', 
        'email', 
        'id_tipo_usuarios', 
        'senha'
    ];
    
    protected $hidden = ['senha'];
}
