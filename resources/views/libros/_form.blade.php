<?php
use Illuminate\Support\Collection;
?>

<div class="form-group <?php
if($errors->has('TITULO')) {
    echo "has-error";
}
?>">
    <?= Form::label('TITULO', 'Título:', ['class' => 'control-label']);?>
    <?= Form::text('TITULO', null, ['class' => 'form-control']);?>
</div>

<div class="form-group">
    <?= Form::label('FKGENERO', 'Género:', ['class' => 'control-label']);?>
	
   <?= Form::select( 'FKGENERO',$genero,null, ['class' => 'form-control']);?>
</div>


<div class="form-group">
    <?= Form::label('AUTOR', 'Autor:', ['class' => 'control-label']);?>
    <?= Form::text('AUTOR', null, ['class' => 'form-control']);?>
</div>
<div class="form-group">
    <?= Form::label('EDITORIAL', 'Editorial:', ['class' => 'control-label']);?>
    <?= Form::text('EDITORIAL', null, ['class' => 'form-control']);?>
</div>

<div class="form-group">
    <?= Form::label('PRECIO', 'Precio:', ['class' => 'control-label']);?>
    <?= Form::text('PRECIO', null, ['class' => 'form-control']);?>
</div>


<div class="form-group">
    <?= Form::label('DESCRIPCION', 'Descripción:', ['class' => 'control-label']);?>
    <?= Form::textarea('DESCRIPCION', null, ['class' => 'form-control']);?>
</div>

<div class="form-group">
    <?= Form::label('ANIO_EDICION', 'Año de edición:', ['class' => 'control-label']);?>
    <?= Form::text('ANIO_EDICION', null, ['class' => 'form-control']);?>
</div>
