<?php
use Illuminate\Support\Collection;
?>
@extends('layouts.main')

@section('title')
Editar Libro
@stop

@section('content')
    <h1>Editar Libro</h1>
    @if($errors->any())
        <ul class="alert alert-danger">
        @foreach($errors->all() as $campo => $mensaje)
            <li class="text-danger">{{ $mensaje }}</li>
        @endforeach
        </ul>
    @endif

    <?= Form::model($libro, ['route' => ['libros.editar', $libro->ID_LIBRO], 'method' => 'put' ,'class' => 'formu']);?>

            @include('libros._form')
        <?= Form::submit('Editar', ['class' => 'btn btn-success btn-lg active']); ?>

        <?= link_to_route('libros.index', 'Volver al listado', [], ['class' => 'btn btn-primary btn-lg active']); ?>
    <?= Form::close();?>
@stop
