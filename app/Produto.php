<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //Serve para dizer quais campos irei utilizar
    protected $fillable = [

        'descricao','cor','preco','peso'

    ];
}
