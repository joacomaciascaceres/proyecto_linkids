<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensualidadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mensualidads', function(Blueprint $table)
		{
			
			
			$table->increments('id');
			$table->date('fechavencimiento');
			$table->date('fechapago');
			$table->float('monto');
			$table->string('estado');
			
			$table->timestamps();
			
			$table->integer('alumno_id')->unsigned();
			$table->foreign('alumno_id')->references('id')->on('alumnos');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mensualidads');
	}

}
