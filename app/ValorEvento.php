<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValorEvento extends Model
{
    protected $primaryKey = 'idvalor_evento';

    protected $fillable = [
        'valor',
        'idevento',
        'idevento'
    ];
}
