<!DOCTYPE html>
<html>

<head>
    <title>Meu Site</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="paginaprincipal">
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
    <div class="container">
        @if(session("msg"))
        <p class="msg">{{session('msg')}}</p>
        @endif
        @yield('content')
    </div>
    @foreach($events as $events)
<P>{{ $events -> title }} <br>
    {{ $events -> description }} <br>
    {{ $events -> attractions}} <br>
    {{ $events -> date}} <br>
    {{ $events -> city }} <br>
    {{ $events -> private}} <br>
    {{ $events -> image}}
</P>
@endforeach
    <footer class="footer">
        <p>&copy; 2023 Lenine Junior - Sympla da shoppe</p>
    </footer>
</body>

</html>