<?php
use Illuminate\Support\Collection;
?>

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
    <?= Form::label('fkusuario', 'Usuario:', ['class' => 'control-label']);?>
    
   <?= Form::text( 'fkusuario', null, ['class' => 'form-control', 'readonly' => 'true']);?>
</div>

<div class="form-group">
    <?= Form::label('created_at', 'Fecha:', ['class' => 'control-label']);?>
    <?= Form::text('created_at', null, ['class' => 'form-control', 'readonly' => 'true']);?>
</div>

<div class="form-group">
    <?= Form::label('oferta', 'Oferta:', ['class' => 'control-label']);?>
    <?= Form::textarea('oferta', null, ['class' => 'form-control']);?>
</div>

