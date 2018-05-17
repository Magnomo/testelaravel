@extends('template.layout')
@section('content')
<hr>
<div class=" row" id='pagIni'>

        <h1>Bem vindo, {{Auth::user()->cliente->nome}}</h1>
        <p class="lead"></p>
      </div>

    </div>

@stop
<style>
	#pagIni{
		background-color: white;
		border-radius: 4px;
	}

</style>