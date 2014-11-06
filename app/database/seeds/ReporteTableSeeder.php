<?php

class ReporteTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Reporte::create(array(
		
		'Comida' => '1',
		'Colacion' => 'true',
		'Siesta' => 'false',
		'Fecha' => '2014-10-28',
		'Cuerpo' => 'Damián estuvo con fiebre, le dimos la dosis de paracetamol indicada por el apoderado',
		'alumno_id' => '1',
		
		));
		
			
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
