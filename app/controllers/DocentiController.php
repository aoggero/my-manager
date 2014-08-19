<?php

class DocentiController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('manager.docenti.index')->with('docenti', Docente::all());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('manager.docenti.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'nome'       			 => 'required',
			'cognome'      			 => 'required',
			//'identificativo_fiscale' => 'required',
			'posizione_fiscale'      => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('docenti/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$docente = new Docente;
			$docente->nome       = Input::get('nome');
			$docente->cognome    = Input::get('cognome');
			//$docente->identificativo_fiscale = Input::get('identificativo_fiscale');
			$docente->posizione_fiscale = Input::get('posizione_fiscale');
			$docente->num_contratto_arca = Input::get('num_contratto_arca');
			$docente->num_fornitore_arca = Input::get('num_fornitore_arca');

			$docente->save();

			Session::flash('message', 'Successfully created record');
			return Redirect::to('docenti');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('manager.docenti.show')->with('docente', Docente::find($id));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('manager.docenti.edit')->with('docente', Docente::find($id));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// Validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'nome'       			 => 'required',
			'cognome'      			 => 'required',
			//'identificativo_fiscale' => 'required',
			'posizione_fiscale'      => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('docenti/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$docente = Docente::find($id);
			$docente->nome       = Input::get('nome');
			$docente->cognome    = Input::get('cognome');
			//$docente->identificativo_fiscale = Input::get('identificativo_fiscale');
			$docente->posizione_fiscale = Input::get('posizione_fiscale');
			$docente->num_contratto_arca = Input::get('num_contratto_arca');
			$docente->num_fornitore_arca = Input::get('num_fornitore_arca');

			$docente->save();

			Session::flash('message', 'Successfully created record');
			return Redirect::to('docenti');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$docente = Docente::find($id);
		$docente->delete();

		Session::flash('message', 'Succesfully deleted the Nerd');
		return Redirect::to('docenti');
	}
	
	public function postQuickUpdate() {
        $inputs = Input::all();

        $docente = Docente::find($inputs['pk']);

        $docente->$inputs['name'] = $inputs['value'];

		if($docente->save()) 
			return Response::json(array('status'=>1));
		else 
			return Response::json(array('status'=>0));
    }


}
