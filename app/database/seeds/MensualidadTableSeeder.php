<?php

class MensualidadTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Mensualidad::create(array(
		
		'fechavencimiento' => '2014-10-05',
		'fechapago' => '2014-10-01',
		'monto' => '45000',
		'estado' => 'TRUE',
		'alumno_id' => '1',
		
		
		));
		
			
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
