<?php

class AlumnoTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Alumno::create(array(
		
		'nombrealumno' => 'Damián Sánchez Cerro',
		'fechanacimiento' => '2010-12-14',
		'nivel' => 'Medio Mayor',
		'direccion' => 'Neulen 5518',
		'telefono' => '3245283',
		'usuario_id' => '1'
			
		));
		
		
		
		
	
		
		
		
		
	
		
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
