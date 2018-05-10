<?php

class ClienteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$cliente = new Cliente;
		return View::make('cliente.listar', compact('cliente'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(){
		$data =['url'=>'cliente', 'method'=>"POST"];
		return View::make('cliente.form', compact('data'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validator = Validator::make($input,ClienteValidator::rules(),ClienteValidator::messages());
		if($validator->passes()){
		DB::beginTransaction();
		try{
			$cliente = new Cliente;
			$cliente->fill($input)->save();

		}catch(\Exception $e){
			DB::rollback();
			return $e->getMessage();

		}
		DB::commit();
		return Redirect::to('cliente/create')->with('success', 'Cliente cadastrado com sucesso');
	}$validator->getMessageBag()->setFormat('<div class="alert alert-danger">:message </div>');
	return Redirect::back()->withErrors($validator)->withInput();
}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cliente = Cliente::find($id);
		$data = [
			'url'=>'cliente/'.$id,
			'method'=>'PUT'
		];
		return View::make('cliente.form', compact('data','cliente'));

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
		$validator = Validator::make($input,ClienteValidator::rules(),ClienteValidator::messages());
		if($validator->passes()){
			DB::beginTransaction();
			try{
				$cliente = Cliente::find($id);
				$cliente->fill($input)->update();
			}catch(\Exception $e){
				DB::rollback();
				return $e->getMessage();
			}
			DB::commit();
			return Redirect::back()->with('success', 'Cliente atualizado com sucesso!');
		}
		$validator->getMessageBag()->setFormat('<div class="alert alert-danger">:message</div> ');
		return Redirect::back()->withErrors($validator)->withInput();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$cliente = Cliente::find($id);
		$cliente->delete();
		return Redirect::back()->with('success', "Cliente removido com sucesso");
	}
	public function restore($id){
		$cliente = Cliente::onlyTrashed()->find($id);
		$cliente->restore();
		return Redirect::back()->with('success', 'Cliente reativado com sucesso');
	}


}
