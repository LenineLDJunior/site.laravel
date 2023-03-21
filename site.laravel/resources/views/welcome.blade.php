<!DOCTYPE html>
<html>

<head>
    <title>Meu Site</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<<<<<<< HEAD
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
<section>{{ $events -> title }} <br>
=======
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
>>>>>>> 7f6010580eef8668e153789d708914076f6ffae0
    {{ $events -> description }} <br>
    {{ $events -> attractions}} <br>
    {{ $events -> date}} <br>
    {{ $events -> city }} <br>
    {{ $events -> private}} <br>
    {{ $events -> image}}
<<<<<<< HEAD
</section>
=======
</P>
>>>>>>> 7f6010580eef8668e153789d708914076f6ffae0
@endforeach
    <footer class="footer">
        <p>&copy; 2023 Lenine Junior - Sympla da shoppe</p>
    </footer>
</body>

</html>