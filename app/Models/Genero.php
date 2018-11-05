<?php

namespace App\Models;



class Genero extends \Eloquent
{
  protected $table = "genero";
  protected $primaryKey = "ID_GENERO";
  public function libros()
    {
        return $this->hasMany(Genero::class, 'ID_GENERO', 'FKGENERO');
    }
}
