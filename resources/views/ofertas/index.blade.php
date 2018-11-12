<?php ?>
@extends('layouts.app')

@section('content')


<div class="container">
	<h1>Bolsa de trabajo</h1>
	


    @foreach($ofertas as $unaOferta)
        <div class="content-oferta">
            <h2 class="ofert-title">{{ $unaOferta->titulo }}</h2>
            <p>{{ Carbon\Carbon::parse($unaOferta->created_at)->format('d-m-Y') }}</p>
            <p>Area: <strong>{{ $unaOferta->AREA->area }}</strong></p>
            <p>{{ $unaOferta->oferta }}</p>
        </div>
     @endforeach  
	
</div>
<?php ?>
@stop