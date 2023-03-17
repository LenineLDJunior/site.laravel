@extends('main')
@section('title', 'Produtos')
@section('content')

@if($busca != "")
<p>O usuario esta buscando: {{$busca}}</p>
@endif
@endsection