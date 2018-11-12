@extends('layouts.app')
@section('content')
<div class="container">
	@if(\Session::has('error'))
	<div class="alert alert-danger">
		{{\Session::get('error')}}
	</div>
@endif
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>

				<h1>Listado de Ofertas</h1>
			    <p>Ofertas disponibles</p>

			 @foreach($ofertas as $unaOferta)
			        <div class="content-oferta">
			            <h2 class="ofert-title">{{ $unaOferta->titulo }}</h2>
			            <p>{{ Carbon\Carbon::parse($unaOferta->created_at)->format('d-m-Y') }}</p>
			            <p>Area: <strong>{{ $unaOferta->AREA->area }}</strong></p>
			            <p>{{ $unaOferta->oferta }}</p>
			        </div>
			     @endforeach 

				<?php if(auth()->user()->is_admin == 1){?>

				<div class="panel-body">
					<a href="{{url('admin/routes')}}">Admin</a>
				</div>

				<?php } 	
				else echo '<div class="panel-heading">Normal User</div>';?>
			</div>
		</div>
	</div>
</div>
@endsection