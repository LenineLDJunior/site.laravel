<!DOCTYPE html>
<html>

<head>
    <title>Lenine Junior</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<h1> Seja bem vindo ao Site de um Programador Junior. By Lenine Junior </h1>
<section id="menu">
    <h5>
        <a href="/contact">Fale comigo</a>
    </h5>
    <h5>
        <a href="/login">Faça login</a>
    </h5>
    <h5>
        <a href="/events/{{$events -> id}}">Produtos</a>
    </h5>
    <h5>
        <a href="/events.create">Crie seu evento</a>
    </h5>
</section>
<h2>Busque por um evento </h2>
<form action="/" method="GET">
    <input type="text" id="search" name="search" class="form-control" placeholder="Procurar Evento">
</form>
@foreach($events as $events)
<section>
    <div class="card col-md-3">
        <img src="/img/events/{{ $events -> image}}">
        {{ $events -> title }} <br>
        {{ $events -> description }} <br>
        {{ $events -> attractions}} <br>
        {{ $events -> date}} <br>
        {{ $events -> city }} <br>
        {{ $events -> private}} <br>
        <a href="/events/{{$events -> id}}" class="btn btn-primary">Saber mais</a>
    </div>
</section>
@endforeach
<footer class="footer">
    <p>&copy; 2023 Lenine Junior - Sympla da shoppe</p>
</footer>
</body>

</html>