<?php
use Illuminate\Support\Collection;
?>
@extends('layouts.main')

@section('title')
Añadir libro
@stop

@section('content')
    <h1>Añadir Libro</h1>
    <p>Añadir un nuevo libro a la lista</p>
     @if($errors->any())
        <ul class="alert alert-danger">
        @foreach($errors->all() as $campo => $mensaje)
            <li class="text-danger">{{ $mensaje }}</li>
        @endforeach
        </ul>
    @endif

    <?= Form::open(['class' => 'formu']);?>
        @include('libros._form')

         <?= Form::submit('Crear', ['class' => 'btn btn-success btn-lg active']); ?>

        <?= link_to_route('libros.index', 'Volver a la lista', [], ['class' => 'btn btn-primary btn-lg active']); ?>
    <?= Form::close();?>
@stop
