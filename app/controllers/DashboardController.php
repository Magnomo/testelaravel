<?php

class DashboardController extends BaseController{


	public function inicio(){

		
		$pormes = [];
		$pessoas = Pessoa::all();
		$vendasEfetuadas = Venda::all();
		
		

		$anos = Venda::select("dataVenda")->groupBy(DB::raw("DATE_FORMAT(dataVenda, '%Y')"))->get();
		

		foreach($anos as $key => $ano){
			$anos[$key] = explode('-', $ano['dataVenda'])[0];
		}



		if(Input::has('ano'))
			$ano = Input::get('ano');
		else
			$ano = date('Y');


		$vendas = DB::table('vendas')->select('dataVenda', DB::raw('count(*) as quantVenda'))->groupBY("dataVenda")->get();


		$meses = [ 'JAN', 'FEV', 'MAR', 'ABR', 'MAI', 'JUN', 'JUL', 'AGO', 'SET', 'OUT', 'NOV', 'DEZ' ];


		foreach ($meses as $key => $mes){
			

			$key = $key+1;

			$data1 = date('Y-m-d',strtotime("$ano-$key-01"));
			$data2 = date('Y-m-d',strtotime("$ano-$key-01 +1 month -1 day"));

			$valorVenda[$key-1] = DB::select(
				"SELECT SUM(valores) as soma from (
					SELECT 
						(quantidade*preco) as valores
					FROM
						mercado.vendas
							JOIN
						produto_venda ON produto_venda.venda_id = id
							JOIN
						produtos ON produtos.id = produto_venda.produto_id
					WHERE
						dataVenda >= '$data1' AND dataVenda <= '$data2'
				)t1"
			)[0]->soma;

			$pormes[$key-1] = Venda::where('dataVenda','>=',$data1)->where('dataVenda','<=',$data2)->count();

		}


		// foreach($vendasEfetuadas as $i => $vendaEfetuada){
		// 	foreach ($vendaEfetuada->produtos as $j => $produto){

		// 		$vendasss[$i][$j]['quantidade'] = $produto->pivot->quantidade;
		// 		$vendasss[$i][$j]['preco'] = $produto->preco;
		// 		$vendasss[$i][$j]['id'] = $vendaEfetuada->id;
		// 		$valorProdutos[$i][$j]['ValorTotalProdutos']= $vendasss[$i][$j]['quantidade'] * $vendasss[$i][$j]['preco'];
		// 		$vendasss[$i][$j]['somaProdutos']

		// 	}


		// }
		
		$produtos = Produto::all();


		return View::make("index",compact('pessoas', 'produtos', 'vendas', 'anos', 'pormes', 'meses', 'valorVenda')); 

	}





}	