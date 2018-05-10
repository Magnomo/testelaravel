<?php

class ProdutoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$produtos= new Produto;
		return View::make('produto.listar', compact('produtos'));

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(){
		$data=[
			'categorias' => MainHelper::fixarray(Categoria::all(),'id','nome'),	
			'url' => 'produto', 'method'=>'POST' 
		];
		return View::make('produto.form', compact('data'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$validator = Validator::make($input,
			ProdutoValidator::rules(),ProdutoValidator::messages()
		);
		if($validator->passes()){
			DB::beginTransaction();
			try {
				$produto = new Produto;
				$produto->fill($input)->save();
				$produto->categorias()->attach($input['categoria']);
				$produto->categorias;
			} catch (\Exception $e) {
				DB::rollback();
				return $e->getMessage();
			}
			DB::commit();
			return Redirect::to('produto/create')->with('success', 'Produto cadastrado com sucesso');
			
		}
		$validator->getMessageBag()->setFormat('<div class="alert alert-danger">:message</div> ');
		return Redirect::to('produto/create')->withErrors($validator)->withInput();

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
		$produto = Produto::find($id);

		$data=[
			'categorias' => MainHelper::fixarray(Categoria::all(),'id','nome'),	
			'url' => 'produto/'.$id, 'method'=>'PUT' 
		];		
		return View::make('produto.form', compact('data', 'produto'));

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//

		$input = Input::all();
		$validator = Validator::make($input,
			ProdutoValidator::rules(),ProdutoValidator::messages()
		);
		if($validator->passes()){
			DB::beginTransaction();
			try {
				$produto =Produto::find($id);
				$produto->fill($input)->update();
			// $produto->categorias()->attach($input['categoria']);
			// $produto->categorias;

			} catch (\Exception $e) {
				DB::rollback();

				return $e->getMessage();
			}
			DB::commit();
			return Redirect::back()->with('success', 'Produto editado com sucesso');
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
		$produto = Produto::find($id);
		$produto->delete();
		return Redirect::back()->with('success','Produto removido com sucesso!');
	}
	public function restore($id){

		$produto = Produto::onlyTrashed()->find($id);
		$produto->restore();
		return Redirect::back()->with('success', 'Produto reativado com sucesso!');
	}


}
