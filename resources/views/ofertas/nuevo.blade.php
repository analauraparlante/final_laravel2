<?php
use Illuminate\Support\Collection;
?>
@extends('layouts.main')

@section('title')
Añadir Oferta
@stop

@section('content')
    <h1>Añadir Oferta</h1>
    <p>Añadir una nueva oferta a la lista</p>
     @if($errors->any())
        <ul class="alert alert-danger">
        @foreach($errors->all() as $campo => $mensaje)
            <li class="text-danger">{{ $mensaje }}</li>
        @endforeach
        </ul>
    @endif

        <?= Form::open(['class' => 'formu']);?>

            <div class="form-group <?php
            if($errors->has('titulo')) {
            echo "has-error";
            }
            ?>">
                <?= Form::label('titulo', 'Título:', ['class' => 'control-label']);?>
                 <?= Form::text('titulo', null, ['class' => 'form-control']);?>
            </div>

            <div class="form-group">
                <?= Form::label('fkarea', 'Área:', ['class' => 'control-label']);?>
                
               <?= Form::select( 'fkarea',$area,null, ['class' => 'form-control']);?>
            </div>

            <div class="form-group">
              <?= Form::label('oferta', 'Oferta:', ['class' => 'control-label']);?>
              <?= Form::textarea('oferta', null, ['class' => 'form-control']);?>
            </div>

            <div class="form-group">
              <?= Form::hidden('fkusuario', Auth::user()->id, null, ['class' => 'form-control']);?>
            </div>


         <?= Form::submit('Crear', ['class' => 'btn btn-success btn-lg active']); ?>

        <?= link_to_route('ofertas.panel', 'Volver a la lista', [], ['class' => 'btn btn-primary btn-lg active']); ?>
    <?= Form::close();?>
@stop




