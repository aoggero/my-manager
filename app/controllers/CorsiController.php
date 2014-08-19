<?php

class CorsiController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$corsi = Corso::all();

		return View::make('manager.corsi.index')->with('corsi', $corsi);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('manager.corsi.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'codice'       => 'required',
			'facolta'      => 'required',
			'corso' => 'required',
			'descrizione' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('corsi/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$corso = new Corso;
			$corso->codice       = Input::get('codice');
			$corso->facolta      = Input::get('facolta');
			$corso->corso = Input::get('corso');
			$corso->descrizione = Input::get('descrizione');

			$corso->save();

			Session::flash('message', 'Successfully created record');
			return Redirect::to('corsi');
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
		$corso = Corso::find($id);
		return View::make('manager.corsi.show')->with('corso', $corso);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$corso = Corso::find($id);
		return View::make('manager.corsi.edit')->with('corso', $corso);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'codice'       => 'required',
			'facolta'      => 'required',
			'corso' => 'required',
			'descrizione' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('corsi/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$corso = Corso::find($id);
			$corso->codice       = Input::get('codice');
			$corso->facolta      = Input::get('facolta');
			$corso->corso = Input::get('corso');
			$corso->descrizione = Input::get('descrizione');

			$corso->save();

			Session::flash('message', 'Record modificato correttamente');
			return Redirect::to('corsi');
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
		$corso = Corso::find($id);
		$corso->delete();

		Session::flash('message', 'Corso cancellato correttamente');
		return Redirect::to('corsi');
	}
	
	public function updatePost()
    {
        $corso = Input::all();

        $corso = Corso::find($inputs['pk']);

        $corso->$inputs['name'] = $inputs['value'];

		$corso->save();
		
        return Redirect::to('corsi.index');
    }


}
