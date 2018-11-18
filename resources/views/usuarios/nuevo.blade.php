<?php
use Illuminate\Support\Collection;

?>
@extends('layouts.app')

@section('title')
Crear Usuario
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

    <?= Form::open(['route' => 'usuarios.nuevo', 'method' => 'post', 'files' => true, 'class' => 'content-form-action']);?>

    <h2>Crear usuario</h2>

    <div class="form-group">
        <?= Form::label('name', 'Nombre:', ['class' => 'control-label']);?>
        <?= Form::text('name', null, ['class' => 'form-control']);?>
    </div>

    <div class="form-group">
        <?= Form::label('email', 'Email:', ['class' => 'control-label']);?>
        <?= Form::text( 'email', null, ['class' => 'form-control']);?>
    </div>

    <div class="form-group">
        <?= Form::label('password', 'Clave:', ['class' => 'control-label']);?>
        <?= Form::password('password', null, ['class' => 'form-control']);?>
    </div>


    <?php $id_admin = (object) array( '0' => 'usuario', '1' => 'admin'); ?>
    <div class="form-group">
        <?= Form::label('is_admin', 'Nivel:', ['class' => 'control-label col-md-4 control-label']);?>
        <?= Form::select('is_admin', $id_admin, null, ['class' => 'form-control col-md-4 control-label']);?>
    </div>

    <div class="form-action-button">
        <?= Form::submit('Crear', ['class' => 'btn btn-success btn-lg btn-primary']); ?>
        <?= link_to_route('usuarios.index', 'Volver al listado', [], ['class' => 'btn btn-primary btn-lg active']); ?>
    </div>    
    <?= Form::close();?>
</div>    
@stop
