<?php
use Illuminate\Support\Collection;
?>
@extends('layouts.app')

@section('title')
Editar Usuario
@stop

@section('content')
<div class="container">
    
    @if($errors->any())
        <ul class="alert alert-danger">
        @foreach($errors->all() as $campo => $mensaje)
            <li class="text-danger">{{ $mensaje }}</li>
        @endforeach
        </ul>
    @endif

    <?= Form::model($usuario, ['route' => ['usuarios.editar', $usuario->id], 'method' => 'put' ,'class' => 'content-form-action']);?>
        <h2>Editar Usuario</h2>
            @include('usuarios._form')
            <div class="form-action-button">
              <?= Form::submit('Editar', ['class' => 'btn btn-success btn-lg active']); ?>
              <?= link_to_route('usuarios.index', 'Volver al listado', [], ['class' => 'btn btn-primary btn-lg active']); ?>
            </div>  
    <?= Form::close();?>
</div>    
@stop