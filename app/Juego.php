<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Juego extends Model
{
    protected $table = 'juegos';

    protected $fillable = ['nombre','imagen','voz','texto','descripcion','requerimientos','compania','lanzamiento','id_categoria','precio'];

    public function categoria()
    {
    	return $this->belongsTo('App\Categoria','id_categoria');
    }

    public function setImagenAttribute($imagen)
    {
    	$this->attributes['imagen'] = Carbon::now()->second.$imagen->getClientOriginalName();
    	$nombre =  Carbon::now()->second.$imagen->getClientOriginalName();
    	\Storage::disk('local')->put($nombre,\File::get($imagen));
    }
}
