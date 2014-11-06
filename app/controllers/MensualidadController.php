<?php

class MensualidadController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mensualidads = Mensualidad::all();
		return View::make('mensualidads.index')->with('mensualidads', $mensualidads);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('mensualidads.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$mensualidad = new Mensualidad;
		$mensualidad->fechavencimiento = Input::get('fechavencimiento');
		$mensualidad->fechapago = Input::get('fechapago');
		$mensualidad->monto = Input::get('monto');
		$mensualidad->estado = Input::get('estado');
		$mensualidad->alumno_id = Input::get('alumno_id');
		$mensualidad->save();
		return Redirect::to('mensualidads');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$mensualidad = Mensualidad::find($id);
		return View::make('mensualidads.show')->with('mensualidad', $mensualidad);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mensualidad = Mensualidad::find($id);
		return View::make('mensualidads.edit')->with('mensualidad', $mensualidad);
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
		$mensualidad = Mensualidad::find($id);
		$mensualidad ->fechavencimiento = $input['fechavencimiento'];
		$mensualidad ->fechapago = $input['fechapago'];
		$mensualidad ->monto = $input['monto'];
		$mensualidad ->estado = $input['estado'];
		$mensualidad ->alumno_id = $input['alumno_id'];
		$mensualidad ->save();
		return Redirect::to('mensualidads/' . $id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$mensualidad = Mensualidad::find($id);
		$mensualidad->delete();
		return Redirect::to('mensualidads');
	}


}
