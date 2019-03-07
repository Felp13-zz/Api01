<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //Serve para dizer quais campos irei utilizar
    protected $fillable = [

        'numero'

    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
