<?php

class ReporteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$reportes = Reporte::all();
		return View::make('reportes.index')->with('reportes', $reportes);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('reportes.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$reporte = new Reporte;
		$reporte->Comida = Input::get('Comida');
		$reporte->Colacion = Input::get('Colacion');
		$reporte->Siesta = Input::get('Siesta');
		$reporte->Fecha = Input::get('Fecha');
		$reporte->Cuerpo = Input::get('Cuerpo');
		$reporte->alumno_id = Input::get('alumno_id');
		$reporte->save();
		return Redirect::to('reportes');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$reporte = Reporte::find($id);
		return View::make('reportes.show')->with('reporte', $reporte);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$reporte = Reporte::find($id);
		return View::make('reportes.edit')->with('reporte', $reporte);
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
		$reporte = Reporte::find($id);
		$reporte ->Comida = $input['Comida'];
		$reporte ->Colacion = $input['Colacion'];
		$reporte ->Siesta = $input['Siesta'];
		$reporte ->Fecha = $input['Fecha'];
		$reporte ->Cuerpo = $input['Cuerpo'];
		$reporte ->alumno_id = $input['alumno_id'];
		$reporte ->save();
		return Redirect::to('reportes/' . $id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$reporte = Reporte::find($id);
		$reporte->delete();
		return Redirect::to('reportes');
	}


}
