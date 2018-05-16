@extends('template.layout')
@section('content')
<hr>
<div class=" row" id='pagIni'>

        <h1>Bem vindo, {{Auth::user()->cliente->nome}}</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

    </div>

@stop
<style>
	#pagIni{
		background-color: #696969;
	}

</style>