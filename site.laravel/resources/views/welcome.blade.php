<!DOCTYPE html>
<html>

<head>
    <title>Lenine Junior</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<h1> Seja bem vindo ao Site de um Programador Junior. By Lenine Junior </h1>
<section id="menu">
    <h5>
    @if (Auth::check())
        <a href="/dashboard">Ir para Dashboard</a>
        <a href="/events.create">Crie seu evento</a>
    @else
        <a href="/register">Registre-se</a>
        <a href="/login">Faça login</a>
    @endif
     </h5>
</section>
<h2>Busque por um evento </h2>
<form action="/" method="GET">
    <input type="text" id="search" name="search" class="form-control" placeholder="Procurar Evento">
</form>

<div>
    @if (count($events) != 0)
    <h1>Esses são os eventos disponiveis no site:</h1>
    @foreach($events as $events)
    <section>
        <div class="wrapper">
            <section class="bloco">
            <h2> {{ $events -> title }}</h2> <br>
            <img src="/img/events/{{ $events -> image}}" style = "width:flex"><br>
            {{ $events -> description }} <br>
            {{ $events -> attractions}} <br>
            {{date('d/m/Y', strtotime($events -> date))}} <br>
            {{ $events -> city }} <br>
            @if($events -> private == 0)
            <p>O evento não é privado</p>
            <a href="/events/{{$events -> id}}" class="btn btn-primary">Saber mais</a>
            @else
            <p>O Evento é Privado</p>
            @endif
            </section>
        </div>
    </section>
    @endforeach
    @elseif (count($events) == 0 && $search)
    <h1>Não encontramos nenhum evento com {{$search}}</h1>
    <h1>
        <a href="/events.create">Crie seu evento</a><br>
        <a href="/">Veja todos os Eventos</a>
    </h1>
    @endif
</div>
<footer class="footer">
    <p>&copy; 2023 Lenine Junior - Sympla da shoppe</p>
</footer>
</body>

</html>