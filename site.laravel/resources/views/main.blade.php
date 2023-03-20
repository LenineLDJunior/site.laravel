<!DOCTYPE html>
<html>

<head>
    <title>Meu Site</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="paginaprincipal">
    <header class="header">
        <nav class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        <p>&copy; 2023 Lenine Junior - Sympla da shoppe</p>
    </footer>
</body>

</html>