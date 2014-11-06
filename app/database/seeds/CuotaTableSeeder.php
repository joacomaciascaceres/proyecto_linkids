<?php

class CuotaTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Cuota::create(array(
		
		'MontoPagado' => '2000',
		'FechaCuota' => '2014-10-01',
		'alumno_id' => '1',
		
		
		
		));
		
			
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
