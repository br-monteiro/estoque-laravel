@extends('layout.default')

@section('title')
Listagem de ProdutosListagem de Produtos
@stop

@section('content')
<h1>Lista de Produtos</h1>
<table class="table table-hover table-bordered">
    @foreach ($produtos as $value)
    <tr>
        <td>{{$value->nome}}</td>
        <td>{{$value->quantidade}}</td>
        <td>{{$value->valor}}</td>
        <td>{{$value->descricao}}</td>
        <td><i class="fa fa-warning"></i></td>
    </tr>
    @endforeach
</table>
@stop