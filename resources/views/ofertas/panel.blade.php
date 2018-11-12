@extends('layouts.app')


@section('content')
<div class="container">
   
    <h1>Listado de Ofertas reloaded</h1>
    <p>Ofertas disponiblesss</p>

   <?= link_to_route('ofertas.nuevoForm', ' + Añadir una Oferta', [], ['class' => 'btn btn-success btn-lg active costado']);?>

    <table class="table table-bordered table-striped table-hover">
       <!-- <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Título</th>
            <th>Área</th>
			<th>Oferta</th>

            <th>Editar</th>
            <th>Eliminar</th>
        </tr>-->

        <?php $id=Auth::user()->id;
          $of=0;
            ?>

        @foreach($ofertas as $unaOferta)
        <?php $id_user=$unaOferta->USUARIO->id;
        if(Auth::user()->is_admin){
            
                if($of==0){
                    echo "<tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Titulo</th>
                        <th>Área</th>
                        <th>Oferta</th>
                        <th>Editar</th>
                        <th>Eliminar</th>";
                        $of=1;
                }
                ?>
            <tr>
                <td>{{ $unaOferta->id }}</td>
                <td>{{ $unaOferta->usuario->name }}</td>
			    <td>{{ $unaOferta->titulo }}</td>
                <td>{{ $unaOferta->area->area }}</td>
                <td>{{ $unaOferta->oferta }}</td>
                <td><?= link_to_route('ofertas.editarForm', 'Editar', [$unaOferta->id], ['class' => 'btn btn-warning']);?></td>
                <td>{{ Form::open(['route' => ['ofertas.eliminar', $unaOferta->id], 'method' => 'delete']) }}

                    <button class="btn btn-danger">Eliminar</span></button>
                {{ Form::close() }}</td>
            </tr>
            <?php  }else{

            if($id_user==$id){
                if($of==0){
                    echo "<tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Titulo</th>
                        <th>Área</th>
                        <th>Oferta</th>
                        <th>Editar</th>
                        <th>Eliminar</th>";
                        $of=1;
                }
                ?>
                <tr>
                    <td>{{ $unaOferta->id }}</td>
                    <td>{{ $unaOferta->usuario->name }}</td>
                    <td>{{ $unaOferta->titulo }}</td>
                    <td>{{ $unaOferta->area->area }}</td>
                    <td>{{ $unaOferta->oferta }}</td>
                    <td><?= link_to_route('ofertas.editarForm', 'Editar', [$unaOferta->id], ['class' => 'btn btn-warning']);?></td>
                    <td>{{ Form::open(['route' => ['ofertas.eliminar', $unaOferta->id], 'method' => 'delete']) }}

                        <button class="btn btn-danger">Eliminar</span></button>
                    {{ Form::close() }}</td>
                </tr>
            <?php } } ?>
        @endforeach

    </table>
                 
</div>
@stop