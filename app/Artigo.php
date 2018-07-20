<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $fillable =[
        'id',
        'nome',
        'telefone',
        'email'
    ];
    protected $table = "artigos";
    
}
