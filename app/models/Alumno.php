<?php

class Alumno extends Eloquent {
	 protected $tabla = 'alumnos';
	
	 
	 
	 
	 public function usuario()
	 {
		 return $this->belongsTo('Usuario');
	 }
	 
	 
	 
	 
	 
	 public function mansualidad()
	 {
		 return $this->hasOne('Mensualidad');
	 }
	 
	 
	 
	 
	 
	 
	 public function cuota()
	 {
		 return $this->hasOne('Cuota');
	 }
	 
	 
	 
	 
	 
	 public function reporte()
	 {
		 return $this->hasOne('Reporte');
	 }
	 
	 
	 
}


	 