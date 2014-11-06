<?php

class Reporte extends Eloquent {
	 protected $tabla = 'reportes';
	 
	  public function alumno()
	 {
		 return $this->belongTo('Alumno');
	 }
	 
	 
}
