<?php

class Cuota extends Eloquent {
	 protected $tabla = 'cuotas';
	 
 
 public function alumno()
	 {
		 return $this->belongTo('alumnos');
	 }
	 
}