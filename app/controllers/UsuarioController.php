<?php

class UsuarioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$data =['url'=>'user', 'method'=>'POST'];
		$usuario = new User;
		return View::make('user.listar', compact('usuario','data'));

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(){
		$data =['url'=>'user', 'method'=>'POST'];
		return View::make('user.cadastro', compact('data'));
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()	{
		//
		$input = Input::all();
		$validator = Validator::make($input,UserValidator::rules(null),UserValidator::messages());
		if($validator->passes()){
			DB::beginTransaction();
			try{
				$usuario = new User;
				$input['senha']=Hash::make($input['senha']);
				$usuario->fill($input)->save();
				$cliente = new Cliente($input);
				$cliente->usuario()->associate($usuario)->save();
			}catch(\Exception $e){
				DB::rollback();
				return $e->getMessage();
			}
			DB::commit();
			return Redirect::to('user/create')->with('success', 'Usuario cadastrado com sucesso');
		}
		$validator->getMessageBag()->setFormat('<div class="alert alert-danger">:message</div> ');
		return Redirect::to('user/create')->withErrors($validator)->withInput();
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
		$usuario = User::find($id);
		$data = ['url'=>'user/'.$id, 'method'=>'PUT'];
		return View::make('user.cadastro', compact('data','usuario'));
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id){
		$input = Input::all();
		$validator = Validator::make($input,UserValidator::rules($id), UserValidator::messages());
		if($validator->passes()){
			DB::beginTransaction();
			try{
				$usuario= User::find($id);
				if(Hash::check($input['senha'],$usuario->senha)){
					$input['senha']= Hash::make($input['senha_confirmation']);
					$usuario->fill($input)->update();
					$cliente = new Cliente($input);
					$cliente->usuario()->associate($usuario)->save();
				}else{

					return Redirect::back()->with('danger', "Senha incorreta");
				}

			}catch(\Exception $e){
				DB::rollback();
				return $e->getMessage();
			}
			DB::commit();
			return Redirect::back()->with('success', "dados atualizados com sucesso");
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
		$user = User::find($id);
		$user->delete();
		return Redirect::back()->with('success', 'usuario removido com sucesso');
	}

	public function restore($id)	{
		$user =User::onlyTrashed()->find($id);
		$user->restore();
		return Redirect::back()->with('success', 'Usuario reativado com sucesso!');
	}
	public function login(){
		$data = ['url'=>'user/login', 'method'=>'POST'];
		return View::make('user.login' ,compact('data'));
	}
	public function validaLogin(){
		$input = Input::except('_token');
		if(Auth::attempt($input)) {
			return Redirect::to('user/create');
		}
		return Redirect::back()->with('danger','erro de autenticação');
	}
	public function logout(){
		Auth::logout();
		return Redirect::to('login');
	}
}
