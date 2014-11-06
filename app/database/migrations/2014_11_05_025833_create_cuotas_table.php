<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuotasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cuotas', function(Blueprint $table)
		{
		
			
			$table->increments('id');
			$table->integer('MontoPagado');
			$table->date('FechaCuota');
			
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
		Schema::drop('cuotas');
	}

}
