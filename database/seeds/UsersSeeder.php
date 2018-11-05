<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('users')->insert([
        	[
				'name'  => 'administrador',
		        'email'     => 'adminofertas@gmail.com',
		        'password'  => bcrypt('admin123'),
		        'is_admin' => true,
		        'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
        	],
	        [
	        	'name' => 'Da Vinci Recruiter',
	    		'email' => 'dvrecruiter@gmail.com',
	    		'password' => bcrypt('dvrecruiter123'),
	    		'is_admin' => false,
	    		'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
	        ],
	        [
	        	'name' => 'Talento IT',
	    		'email' => 'talentoit@gmail.com',
	    		'password' => bcrypt('talentoit123'),
	    		'is_admin' => false,
	    		'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
	        ],
	        [
	        	'name' => 'IT recruiting',
	    		'email' => 'itrecruiting@gmail.com',
	    		'password' => bcrypt('itrecruiting123'),
	    		'is_admin' => false,
	    		'created_at' => date('Y-m-d H:m:s'),
				'updated_at' => date('Y-m-d H:m:s')
	        ]

    	]);
    }
}
