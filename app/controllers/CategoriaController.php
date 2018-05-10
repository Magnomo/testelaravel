<?php

class CategoriaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		
		$categoria = new Categoria;
		
		return View::make('categoria.listar', compact('categoria','data'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(){
		$data=['url'=>'categoria', 'method'=>'POST'];

		return View::make('categoria.form', compact('data'));
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()	{
		$input =Input::all();
		$validator =Validator::make($input,CategoriaValidator::rules(null),CategoriaValidator::messages());
		if($validator->passes()){
			DB::beginTransaction();
			try{
				$categoria= new Categoria;
				$categoria->fill($input)->save();
			}catch(\Exception $e){
				return $e->getMessage();
				DB::rollback();
			}
			DB::commit();
			return Redirect::to('categoria/create')->with('success', 'Categoria cadastrada com sucesso!');

		}
		$validator->getMessageBag()->setFormat('<div class="alert alert-danger">:message</div>');
		return Redirect::to('categoria/create')->withErrors($validator)->withInput();
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
		//
		$categoria = Categoria::find($id);
		$data=['url'=>'categoria/'.$id, 'method'=>'PUT'];
		return View::make('categoria.form',compact('categoria','data'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id){	
		//
		$input= Input::all();
		$validator = Validator::make($input,CategoriaValidator::rules($id),CategoriaValidator::messages());
		if($validator->passes()){
			DB::beginTransaction();
			try{
				$categoria =Categoria::find($id);
				$categoria->fill($input)->update();
			}catch(\Exception $e){
				DB::rollback();
			}
			DB::commit();
			return Redirect::back()->with('success','dados atualizados com sucesso');
		}
		$validator->getMessageBag()->setFormat('<div class="alert alert-danger">:message</div>');
		return Redirect::back()->withErrors($validator)->withInput();
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id){
		$categoria= Categoria::find($id);
		$categoria->delete();
		return Redirect::back()->with('success', 'Categoria " '. $categoria->nome.'" removida com sucesso');
	}
	public function restore($id){
		$categoria = Categoria::onlyTrashed()->find($id);
		$categoria->restore();
		return Redirect::back()->with('success', 'Categoria  "'.$categoria->nome .'" reativado');
	}

}
