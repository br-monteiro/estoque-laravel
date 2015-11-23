@extends('layout.default')

@section('title')
Detalhes do produto {{$produto->nome}}
@stop

@section('content')
<h1>Destalhes do produto {{$produto->nome}}</h1>
<table class="table table-hover table-bordered">
    <tr>
        <td>{{$produto->nome}}</td>
        <td>{{$produto->quantidade}}</td>
        <td>{{$produto->valor}}</td>
        <td>{{$produto->descricao}}</td>
        <td><i class="fa fa-warning"></i></td>
    </tr>
</table>
@stop