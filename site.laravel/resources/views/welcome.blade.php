<!DOCTYPE html>
<html>

<head>
    <title>Lenine Junior</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<h1> Seja bem vindo ao Site de um Programador Junior. By Lenine Junior </h1>
<section id="menu">
    <h5>
        <a href="/register">Registre-se</a>
    </h5>
    <h5>
        <a href="/register">Registre-se</a>
    </h5>
    <h5>
        <a href="/register">Registre-se</a>
    </h5>
    <h5>
        <<<<<<< HEAD <a href="/login">Faça login</a>
    </h5>
    <h5>
        <a href="/">Produtos</a>
        =======
        <a href="/entrar">Faça login</a>
        >>>>>>> 2f6d0d64de0fd923ca555efc5871b4a6e879a031
    </h5>

    <h5>
        <a href="/events.create">Crie seu evento</a>
    </h5>
</section>
<h2>Busque por um evento </h2>
<form action="/" method="GET">
    <input type="text" id="search" name="search" class="form-control" placeholder="Procurar Evento">
</form>

<div>
    <<<<<<< HEAD @if (count($events) !=0) <h1>Esses são os eventos disponiveis no site:</h1>
        @foreach($events as $events)
        <section>
            <div class="card col-md-6">
                <img src="/img/events/{{ $events -> image}}">
                {{ $events -> title }} <br>
                {{ $events -> description }} <br>
                {{ $events -> attractions}} <br>
                {{date('d/m/Y', strtotime($events -> date))}} <br>
                {{ $events -> city }} <br>
                {{ $events -> private}} <br>
                <a href="/events/{{$events -> id}}" class="btn btn-primary">Saber mais</a>
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
        =======
        @if (count($events) != 0)
        <h1>Esses são os eventos disponiveis no site:</h1>
        @foreach($events as $events)
        <section>
            <div class="card col-md-3">
                <h3>{{ $events -> title }}</h3> <br>
                <img src="/img/events/{{ $events -> image}}"><br {{ $events -> description }} <br>
                {{ $events -> attractions}} <br>
                {{date('d/m/Y', strtotime($events -> date))}} <br>
                {{ $events -> city }} <br>
                {{ $events -> private}} <br>
                <a href="/events/{{$events -> id}}" class="btn btn-primary">Saber mais</a>
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
        >>>>>>> 2f6d0d64de0fd923ca555efc5871b4a6e879a031
</div>
<footer class="footer">
    <p>&copy; 2023 Lenine Junior - Sympla da shoppe</p>
</footer>
</body>

</html>