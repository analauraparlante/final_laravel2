<?php

namespace App\Models;


class Libro extends \Eloquent
{
  protected $table = "libro";
  protected $primaryKey = "ID_LIBRO";
  protected $fillable = ['TITULO', 'FKGENERO', 'AUTOR', 'EDITORIAL', 'PRECIO', 'DESCRIPCION','ANIO_EDICION'];
  public $timestamps = false;
  public static $rules = [
        'TITULO' => 'required|min:3',
		'FKGENERO' => 'exists:genero,ID_GENERO',
		'AUTOR' => 'required|min:3',
		'EDITORIAL' => 'required|min:3',
        'PRECIO' => 'required|numeric',
        ];
      public function genero()
     {
     return $this->belongsTo(Genero::class, 'FKGENERO', 'ID_GENERO');
     }
    }



