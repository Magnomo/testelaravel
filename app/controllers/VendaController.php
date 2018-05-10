<?php

class VendaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$vendas = new Venda;
		return View::make('venda.listar', compact('vendas'));	
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data=[
			'produtos'=>MainHelper::fixarray(Produto::all(),
				'id','nome'), 'url'=>'venda', 'method'=>'POST', 'clientes'=>MainHelper::fixarray(Cliente::all(), 'id','nome')
		];
		return View::make('venda.form', compact('data'));
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		 $input = Input::all();
		 $validator =Validator::make($input, VendaValidator::rules(null),VendaValidator::messages());
		if($validator->passes()){
			DB::beginTransaction();
			try{
				$cliente = Cliente::find($input['cliente']);
				$venda = new Venda;
				$venda->cliente()->associate($cliente)->save();
				foreach ($input['produto'] as $key => $produto) {
					$venda->produtos()->attach($produto,array('qtd'=>$input['qtd'][$key]));
				}

			}catch(\Exception $e){
				DB::rollback();

				return $e->getMessage();
			}

			DB::commit();
			return Redirect::to('venda')->with("success", "venda realizada com sucesso");
		}
		
		$validator->getMessageBag()->setFormat('<div class="alert alert-danger">:message</div> ');
		return Redirect::to('venda/create')->withErrors($validator)->withInput();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id){
		$venda =Venda::find($id);
		return View::make('venda.show', compact('venda'));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id){
		$data=[
			'produtos'=>MainHelper::fixarray(Produto::all(),
				'id','nome'), 'url'=>'venda/'.$id, 'method'=>'PUT', 'clientes'=>MainHelper::fixarray(Cliente::all(), 'id','nome')
		];
		$venda = Venda::find($id);

		return View::make('venda.edit', compact('venda','data'));	
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input =Input::all();
		DB::beginTransaction();
		try{
			$venda= Venda::find($id);

			foreach ($venda->produtos as $key => $produto) {
				$produto;
				if(isset($input['produto'][$key])){
					$produto->pivot->fill(array('qtd'=>$input['qtd'][$key]))->update();
					return $produto->pivot;
				}else{
					$venda->produtos()->detach($produto);
				}
			}	
		}catch(\Exception $e){

		}
	}
	public function getPreco($id){
		$produto= Produto::find($id);
		return $produto->preco;
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
	}
}
