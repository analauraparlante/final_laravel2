<?php

namespace App\Models;

class Area extends \Eloquent
{
    protected $table = "areas";
    protected $primaryKey = "id";

	protected $fillable = ['areas', 'id'];
	
	public function OFERTA()
    {
        return $this->hasMany(Oferta::class, 'id', 'id');
    } 
}