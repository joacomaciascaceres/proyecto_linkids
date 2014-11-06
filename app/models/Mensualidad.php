 
 <?php

class Mensualidad extends Eloquent {
	 protected $tabla = 'mensualidads';
	 
 
 public function alumno()
	 {
		 return $this->belongTo('alumnos');
	 }
	 
}