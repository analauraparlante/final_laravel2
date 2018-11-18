@extends('layouts.app')


@section('content')
<div class="container">
   
    <h1>Listado de usuarios</h1>

   <?= link_to_route('usuarios.nuevoForm', ' + Añadir un Usuario', [], ['class' => 'btn btn-success btn-lg active button-right button-agregar']);?>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Nivel</th>
            <th>Contraseña</th>
            <th>Fecha creado</th>

            <th>Editar</th>
            <th>Eliminar</th>
        </tr>

        @foreach($usuarios as $unUsuario)
            <tr>
                <td>{{ $unUsuario->id }}</td>
                <td>{{ $unUsuario->name }}</td>
			    <td>{{ $unUsuario->email }}</td>
                 <td><?php
                    if($unUsuario->is_admin){
                        echo "admin";
                    }
                    else{
                        echo "usuario";
                    }
                ?></td>
                <td>{{ $unUsuario->password }}</td>
                <td>{{ $unUsuario->created_at }}</td>
                
                <td><?= link_to_route('usuarios.editarForm', 'Editar', [$unUsuario->id], ['class' => 'btn button-agregar']);?></td>
                <td>{{ Form::open(['route' => ['usuarios.eliminar', $unUsuario->id], 'method' => 'delete']) }}

                    <button class="btn btn-danger">Eliminar</span></button>
                {{ Form::close() }}</td>
            </tr>
        @endforeach
    </table>
                 
</div>
@stop