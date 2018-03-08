<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasApiTokens, Notifiable;
    
    protected $primaryKey = 'idusuarios';

    protected $fillable = [
        'nome', 
        'email', 
        'id_tipo_usuarios', 
        'senha'
    ];
    
    protected $hidden = ['senha'];
}
