<?php

class UsuarioTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Usuario::create(array(
		
		'nombreusuario' => 'Gladys Cerro Miranda',
		'email' => 'gladys.bta@gmail.com',
		'password' => '1234'
		
		
		));
		
			
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
