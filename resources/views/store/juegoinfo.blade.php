@extends('store.template')

@section('content')
<div class="container">
	<div id="paneljuego">
		<img src="{{'../images/'.$juego->imagen}}" width="200px">		
		<div id="panelinfo" class="panel">
			<h3>{{$juego->nombre}}</h3>
			<p>{{$juego->descripcion}}</p>
			<p>Voz: {{$juego->voz}}</p>
			<p>Texto: {{$juego->texto}}</p>
			<p>Requerimientos: 
				<ul>
				@foreach($requerimientos as $r)
					<li>
						{{$r}}
					</li>
				@endforeach
				</ul>
			</p>
			<p>Compania: {{$juego->compania}}</p>
			<p>Lanzamiento: {{$juego->lanzamiento}}</p>
			<p class="label label-danger">Precio: $ {{$juego->precio}}</p>
			<p>
				<a href="{{route('carrito-add',$juego->id)}}" class="label label-success"><i class="fa fa-cart-arrow-down"></i> Agregar</a>
				<a href="{{route('store')}}" class="label label-info"><i class="fa fa-chevron-left"></i> Volver</a>
			</p>
			
		</div>
	</div>
</div>
@endsection