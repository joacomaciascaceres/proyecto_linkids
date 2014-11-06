<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reportes', function(Blueprint $table)
		{
		
			$table->increments('id');
			$table->string('Comida');
			$table->string('Colacion');
			$table->string('Siesta');
			$table->date('Fecha');
			$table->string('Cuerpo', 255);
			
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
		Schema::drop('reportes');
	}

}
