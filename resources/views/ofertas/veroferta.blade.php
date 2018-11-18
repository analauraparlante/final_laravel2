<?php
use Illuminate\Support\Collection;
?>
@extends('layouts.app')

@section('title')
Editar Oferta
@stop

@section('content')
<div class="container">         
    <div class="content-form-action">
        <h2><?php  echo ($oferta->titulo) ?></h2>
         <p><?php  echo Carbon\Carbon::parse($oferta->created_at)->format('d-m-Y') ?></p>
         <p>Área: <?php  echo ($oferta->area->area) ?></p>
         <p><?php  echo ($oferta->oferta) ?></p> 
    </div>
    <div class="button-volver">
       <?= link_to_route('ofertas.index', 'Volver al listado', [], ['class' => 'btn btn-primary btn-lg active']); ?> 
    </div>
</div>    
@stop