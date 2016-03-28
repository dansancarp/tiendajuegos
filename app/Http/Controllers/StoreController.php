<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Juego;

class StoreController extends Controller
{
    public function index()
    {
    	$juegos = Juego::all();    	
    	return view('store.index',compact('juegos'));
    }

    public function verjuego(Juego $juego)
    {   
    	$requerimientos = explode(',', $juego->requerimientos);
    	return view('store.juegoinfo',compact('juego','requerimientos'));
    }

    public function contacto()
    {
        return view('store.contacto');
    }
}
