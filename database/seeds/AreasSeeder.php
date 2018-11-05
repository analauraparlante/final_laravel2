<?php

use Illuminate\Database\Seeder;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('areas')->delete();
        $area=array('Bases de datos', 
        	'Análisis funcional',
        	'Programción',
        	'Redes',
        	'Seguridad',
        	'Consultoría',
        	'Soporte técnico',
        	'Infraestructura',
        	'Diseño/UX',
        	'Social Media',
        	'Testing',
        	'Pasantías IT',
        	'Telecomunicaciones');
        for ($i=0; $i < 13; $i++){
        	DB::table('areas')->insert([
        		'area' => $area[$i],
        		'created_at' => date('Y-m-d H:m:s'),
        		'updated_at' => date('Y-m-d H:m:s') 
        	]);
        }
    }
}
