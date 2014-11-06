<?php

class UsuarioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$usuarios = Usuario::all();
		return View::make('usuarios.index')->with('usuarios', $usuarios);
		
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usuarios.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$usuario = new Usuario;
		$usuario->nombreusuario = Input::get('nombreusuario');
		$usuario->email = Input::get('email');
		$usuario->password = Input::get('password');
		$usuario->save();

		/* Validación Formulario 
		$rules = array(
		'nombreusuario' => 'required|min:2|max:255',
		'email' => 'required|email|min:6|max:100|unique:usuarios',
		'password' => 'required|min:6|max:100'
		);

		$messages = array(
		'required' => 'El campo :attribute es obligatorio.',
		'min' => 'El campo :attribute no puede tener menos de :min carácteres',
		'email' => 'El campo :attribute debe ser email válido.',
		'max' => 'El campo :attribute no puede tener más de :max carácteres.',
		'unique' => 'El email ingresado ya existe en la base de datos.'	
		);

		$validation = Validator::make(input:all(), $rules, $messages);

		if ($validation->fails()) {
			return Redirect::to('usuarios')->with_errors($validation)->with_input();
		}else{
			$insert = Usuario::insert_users($nombreusuario, $email, $password);
			if ($insert) {
				return Redirect::to('usuarios')->with('mensaje','¡Usuario registrado correctamente!.');
			}
		}
		/* Fin Validación Formulario */

		return Redirect::to('usuarios');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usuario = Usuario::find($id);
		return View::make('usuarios.show')->with('usuario', $usuario);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usuario = Usuario::find($id);
		return View::make('usuarios.edit')->with('usuario', $usuario);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$usuario = Usuario::find($id);
		$usuario ->nombreusuario = $input['nombreusuario'];
		$usuario ->email = $input['email'];
		$usuario ->password = $input['password'];
		$usuario ->save();
		return Redirect::to('usuarios/' . $id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$usuario = Usuario::find($id);
		$usuario->delete();
		return Redirect::to('usuarios');
	}


}
