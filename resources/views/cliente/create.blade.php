@extends('layout')

@section('title', 'Cadastrar cliente')

@section('content')

	<h1>Cadastrar Clientes</h1>

	<form method="post" action="/cliente">
		@csrf

		<input type="text" name="cliente_nome" placeholder="Nome Completo">
		
		<input type="submit" name="botao">

	</form>

@endsection()