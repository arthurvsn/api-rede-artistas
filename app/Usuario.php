<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

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
