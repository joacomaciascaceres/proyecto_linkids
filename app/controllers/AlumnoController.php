<?php

class AlumnoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() 
	{
		$alumnos = Alumno::all();
		return View::make('alumnos.index')->with('alumnos', $alumnos);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('alumnos.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$alumno = new Alumno;
		$alumno->nombrealumno = Input::get('nombrealumno');
		$alumno->fechanacimiento = Input::get('fechanacimiento');
		$alumno->nivel = Input::get('nivel');
		$alumno->direccion = Input::get('direccion');
		$alumno->telefono = Input::get('telefono');
		$alumno->usuario_id = Input::get('usuario_id');
		$alumno->save();
		return Redirect::to('alumnos');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$alumno = Alumno::find($id);
		return View::make('alumnos.show')->with('alumno', $alumno);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$alumno = Alumno::find($id);
		return View::make('alumnos.edit')->with('alumno', $alumno);
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
		$alumno = Alumno::find($id);
		$alumno ->nombrealumno = $input['nombrealumno'];
		$alumno ->fechanacimiento = $input['fechanacimiento'];
		$alumno ->nivel = $input['nivel'];
		$alumno ->direccion = $input['direccion'];
		$alumno ->telefono = $input['telefono'];
		$alumno ->usuario_id = $input['usuario_id'];
		$alumno ->save();
		return Redirect::to('alumnos/' . $id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$alumno = Alumno::find($id);
		$alumno->delete();
		return Redirect::to('alumnos');
	}


}
