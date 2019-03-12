<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
       //Serve para dizer quais campos irei utilizar
       protected $fillable = [

        'descricao','produtos'

    ];

   
    public function produto()
    {
        return $this->hasMany('App\Produto', 'categoria_id');
    }
    
}
