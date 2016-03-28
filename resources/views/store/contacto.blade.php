@extends('store.template')

@section('content')

<div class="container">

	<div class="panel text-center">
		<h3>Encuentranos</h3>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3281.648609127648!2d-58.365496984590195!3d-34.66357616817508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1458739610092" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="panel">
				<h3>Local</h3>
				<p>Av. Bartolomé Mitre 920, Avellaneda</p>
				<p>Argentina</p>				
			</div>
			<div class="panel">
				<h3>Contactanos</h3>
				<p>(011) 4568-4875</p>
				<p>info@dansangames.com</p>
			</div>
		</div>

		<div class="col-md-8">
			<div class="panel">
				{!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
					<div class="form-group">
						<label for="nombre">Nombre: </label>
						{!!Form::text('nombre',null,['placeholder'=>'ingrese nombre','class'=>'form-control'])!!}						
					</div>
					<div class="form-group">
						<label for="email">Email: </label>
						{!!Form::email('email',null,['placeholder'=>'ingrese email','class'=>'form-control'])!!}
					</div>
					<div class="form-group">
						<label for="mensaje">Mensaje: </label>
						{!!Form::textarea('mensaje',null,['placeholder'=>'ingrese mensaje','class'=>'form-control'])!!}
						
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				{!!Form::close()!!}		
			</div>
		</div>
	</div>

</div>

@endsection