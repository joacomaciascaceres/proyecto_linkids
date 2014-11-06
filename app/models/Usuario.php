<?php

class Usuario extends Eloquent {
	 protected $tabla = 'usuarios';
	 public $timestamps = false;
	 
	 
	  public function alumnos()
	 {
		 return $this->hasMany('Alumno');
	 }
	
}


	 