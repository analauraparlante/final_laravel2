<?php  ?>
@extends('layouts.main')

@section('title')
Listado de Libros
@stop

<?php  ?>
@section('content')
    <h1>Listado de Libros</h1>
    <p>Libros disponibles</p>

    <?= link_to_route('libros.nuevoForm', ' + Añadir un libro', [], ['class' => 'btn btn-success btn-lg active costado']);?>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Género</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Precio</th>
            <th>Descripción</th>
			<th>Año de edición</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>

        @foreach($libros as $unLibro)
            <tr>
                <td>{{ $unLibro->ID_LIBRO }}</td>
                <td>{{ $unLibro->TITULO }}</td>
               <td>{{ $unLibro->genero->GENERO }}</td>
			   <td>{{ $unLibro->AUTOR }}</td>
               <td>{{ $unLibro->EDITORIAL }}</td>
                <td>${{ $unLibro->PRECIO }}</td>
                <td>{{ $unLibro->DESCRIPCION }}</td>
				<td>{{ $unLibro->ANIO_EDICION }}</td>
                
                <td><?= link_to_route('libros.editarForm', 'Editar', [$unLibro->ID_LIBRO], ['class' => 'btn btn-warning']);?></td>
                <td>{{ Form::open(['route' => ['libros.eliminar', $unLibro->ID_LIBRO], 'method' => 'delete']) }}
                    <button class="btn btn-danger">Eliminar</span></button>
                {{ Form::close() }}</td>
            </tr>
        @endforeach
    </table>
<?php  ?>
@stop