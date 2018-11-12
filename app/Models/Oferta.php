<?php

namespace App\Models;


class Oferta extends \Eloquent
{
  protected $table = "ofertas";
  protected $primaryKey = "id";
  protected $fillable = ['titulo', 'oferta', 'created_at','fkusuario', 'fkarea'];

  public static $rules = [
        'titulo' => 'required|min:3|max:200',
		'oferta' => 'required',
        ];

      public function USUARIO()
     {
     return $this->belongsTo(Usuario::class, 'fkusuario', 'id');
     }

     public function AREA()
    {
        return $this->belongsTo(Area::class, 'fkarea', 'id');
    }

}
