<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsuarioTableSeeder');
		$this->call('AlumnoTableSeeder');
		$this->call('CuotaTableSeeder');
		$this->call('MensualidadTableSeeder');
		$this->call('ReporteTableSeeder');
		
	}

}
