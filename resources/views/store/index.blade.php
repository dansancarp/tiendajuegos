@extends('store.template')

@section('content')

@include('store.partials.carrusel')

	<div class="row">
		@foreach($juegos as $juego)
			<div class="col-md-3" id="paneljuego">
				<h2 class="label label-primary">{{$juego->nombre}}</h2>			
				<img src="{{'images/'.$juego->imagen}}">				
				<p class="label label-danger">Precio: ${{$juego->precio}}</p>
				<div class="panel" id="panelinfo">
					<a href="{{route('verjuego',$juego)}}" class="label label-info"><span><i class="fa fa-book"></i> Leer mas</span></a>
					<a href="{{route('carrito-add',$juego->id)}}"  class="label label-success"><span><i class="fa fa-cart-arrow-down"></i> Agregar al carrito</span></a>
				</div>
			</div>
		@endforeach	
	</div>	

@endsection