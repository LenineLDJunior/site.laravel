@extends('main')
@section('title', 'Lenine Junior')

@section('content')

<h1> Seja bem vindo ao Site de um Programador Junior. By Lenine Junior </h1>
<h5>
    <a href="/contact">Fale comigo</a>
</h5>
<h5>
    <a href="/login">Faça login</a>
</h5>
<h5>
    <a href="/products">Produtos</a>
</h5>
<h5>
    <a href="/events.create">Crie seu evento</a>
</h5>
@foreach($events as $events)
<P>{{ $events -> title }} <br>
    {{ $events -> description }} <br>
    {{ $events -> attractions}} <br>
    {{ $events -> date}} <br>
    {{ $events -> city }} <br>
    {{ $events -> private}} <br>
</P>
@endforeach

@endsection