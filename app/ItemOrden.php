<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemOrden extends Model
{
    protected $fillable = ['precio','cantidad','id_juego','order_id'];

    public $timestamps = false;

}
