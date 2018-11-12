<?php
use Illuminate\Support\Collection;
?>
@extends('layouts.main')

@section('title')
Editar Usuario
@stop

@section('content')
    <h1>Editar Usuario</h1>
    @if($errors->any())
        <ul class="alert alert-danger">
        @foreach($errors->all() as $campo => $mensaje)
            <li class="text-danger">{{ $mensaje }}</li>
        @endforeach
        </ul>
    @endif

    <?= Form::model($usuario, ['route' => ['usuarios.editar', $usuario->id], 'method' => 'put' ,'class' => 'formu']);?>

            @include('usuarios._form')
        <?= Form::submit('Editar', ['class' => 'btn btn-success btn-lg active']); ?>

        <?= link_to_route('usuarios.index', 'Volver al listado', [], ['class' => 'btn btn-primary btn-lg active']); ?>
    <?= Form::close();?>
@stop