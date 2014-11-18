<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;


class Usuario extends Eloquent implements UserInterface,RemindableInterface{
	
	 protected $tabla = 'usuarios';
	 public $timestamps = false;
	 
	  protected $fillable = array('nombreusuario', 'email', 'password');
	  
	  
	 public function getAuthIdentifier()
    {
        return $this->getKey();
    }
	
	public function getAuthPassword()
    {
        return $this->password;
    }
	
	
	  public function alumnos()
	 {
		 return $this->hasMany('Alumno');
	 }
	 
	 
	 public function getRememberToken()
	{
		return $this->remember_token;
	}
	
	
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}
	
	
	 
	public function getRememberTokenName()
	{
		return 'remember_token';
	}
	
	
	public function getReminderEmail()
	{
		return $this->email;
	}
	
}


	 