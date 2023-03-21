<!DOCTYPE html>
<html>

<head>
    <title>Meu Site</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="paginaprincipal">
    <div class="container">
        @if(session("msg"))
        <p class="msg">{{session('msg')}}</p>
        @endif
        @yield('content')
    </div>

    <footer class="footer">
        <p>&copy; 2023 Lenine Junior - Sympla da shoppe</p>
    </footer>
</body>

</html>