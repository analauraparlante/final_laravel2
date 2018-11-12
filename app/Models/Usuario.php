<?php

namespace App\Models;

class Usuario extends \Eloquent
{
    
    protected $table = "users";
    protected $primaryKey = "id";
	protected $fillable = [
		'name', 'email', 'password', 'is_admin', 'created_at'
	];

    public $timestamps = true;

    public static $rules = [
        'name' => 'required|min:4|max:45',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ];

    public static $rulesedit = [
        'name' => 'required|min:4|max:45',
        'is_admin' => 'bool'
    ]; 

	public function OFERTA()
    {
        return $this->hasMany(Oferta::class, 'id', 'id');
    } 
}