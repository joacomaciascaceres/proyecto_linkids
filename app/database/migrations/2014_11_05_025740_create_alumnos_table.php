<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumnos', function(Blueprint $table)
		{
	
		
			$table->increments('id');
			$table->string('nombrealumno');
			$table->date('fechanacimiento');
			$table->string('nivel');
			$table->string('direccion');
			$table->integer('telefono');
			
			$table->timestamps();
			
		
			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('usuarios');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alumnos');
	}

}
