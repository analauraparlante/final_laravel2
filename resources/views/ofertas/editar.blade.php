<?php
use Illuminate\Support\Collection;
?>
@extends('layouts.main')

@section('title')
Editar Oferta
@stop

@section('content')
    <h1>Editar Oferta</h1>
    @if($errors->any())
        <ul class="alert alert-danger">
        @foreach($errors->all() as $campo => $mensaje)
            <li class="text-danger">{{ $mensaje }}</li>
        @endforeach
        </ul>
    @endif

    <?= Form::model($oferta, ['route' => ['ofertas.editar', $oferta->id], 'method' => 'put' ,'class' => 'formu']);?>

            @include('ofertas._form')
        <?= Form::submit('Editar', ['class' => 'btn btn-success btn-lg active']); ?>

        <?= link_to_route('ofertas.panel', 'Volver al listado', [], ['class' => 'btn btn-primary btn-lg active']); ?>
    <?= Form::close();?>
@stop