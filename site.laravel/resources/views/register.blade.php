<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Registro</title>
</head>

<body>
<form action="/register" method="post" enctype="multipart/form-data">
@csrf
    <h1>Registre-se Agora/h1>
    <div class="form-group">
                <label for="title">Nome Completo</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome completo">
            </div>
            <div class="form-group">
                <label for="title">CPF</label>
                <input type="number" class="form-control" id="cpf" name="cpf" placeholder="CPF">
            </div>
    <div>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" pattern="@" required>
</div>

<div>
    <label for="pass">Senha:</label><br>
    <input type="password" id="pass" name="password" placeholder="(Minimo 8 caracteres)"
           minlength="8" required>
</div>
<br>
<input type="submit" value="Entrar">
    <h5>
        <a href="/">Voltar para pagina principal</a>
    </h5>
</body>
</form>

</html>