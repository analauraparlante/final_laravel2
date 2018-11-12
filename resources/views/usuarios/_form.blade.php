<?php
use Illuminate\Support\Collection;
?>
<div class="form-group">
    <?= Form::label('name', 'Nombre:', ['class' => 'control-label']);?>
    <?= Form::text('name', null, ['class' => 'form-control']);?>
</div>

<div class="form-group">
    <?= Form::label('email', 'Email:', ['class' => 'control-label']);?>
    
   <?= Form::text( 'email', null, ['class' => 'form-control', 'readonly' => 'true']);?>
</div>

<div class="form-group">
    <?= Form::hidden('password', null, ['class' => 'form-control']);?>
</div>


<?php $id_admin = (object) array( '0' => 'usuario', '1' => 'admin'); ?>
<div class="form-group">
    <?= Form::label('is_admin', 'Nivel:', ['class' => 'control-label col-md-4 control-label']);?>
    <?= Form::select('is_admin', $id_admin, null, ['class' => 'form-control col-md-4 control-label']);?>
</div>



