<?php

class CuotaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	public function index() 
	{
                $rucio = Auth::user()->id;
                $laly = Alumno::find($rucio);
		$cuotas = Cuota::where('alumno_id','=',$laly->id)->get();
		return View::make('cuotas.index')->with('cuotas', $cuotas);
	}

	/*public function index()
	{
		$cuotas = Cuota::all();
		return View::make('cuotas.index')->with('cuotas', $cuotas);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('cuotas.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$cuota = new Cuota;
		$cuota->MontoPagado = Input::get('MontoPagado');
		$cuota->FechaCuota = Input::get('FechaCuota');
		
		$cuota->alumno_id = Auth::user()->id;
		$cuota->save();
		return Redirect::to('cuotas');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cuota = Cuota::find($id);
		return View::make('cuotas.show')->with('cuota', $cuota);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cuota = Cuota::find($id);
		return View::make('cuotas.edit')->with('cuota', $cuota);
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
		$cuota = Cuota::find($id);
		$cuota ->MontoPagado = $input['MontoPagado'];
		$cuota->FechaCuota = $input['FechaCuota'];
		$cuota ->alumno_id = $input['alumno_id'];
		$cuota ->save();
		return Redirect::to('cuotas/' . $id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cuota = Cuota::find($id);
		$cuota->delete();
		return Redirect::to('cuotas');
	}


}
