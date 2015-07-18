@extends('app')
@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route'=> 'movie.store', 'method' => 'post', 'novalidate'])!!}
		<div class="form-group">
		 {!! Form::label('full_name', 'Nombre')!!}
		 {!! Form::Text('name',null,['class' => 'form_control','required' => 'required'])!!}
		 </div>
		 <div class="form_group">
		 	{!! Form::label('email', 'Descripci&oacute;n')!!}
		 	 {!! Form::Text('descripcion ,null,['class' => 'form_control','required' => 'required'])!!}
		 </div>
		  <div class="form_group">
		 	{!! Form::submit('enviar', ['class' => 'btn btn-success'])!!}
		 </div>
		 	{!!Form::close()!!}
		 </div>
	</div>
</div>
@endsection



			
