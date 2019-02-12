<?php
session_start();
unset ($_SESSION['pri']);
unset ($_SESSION['acesso']);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="script.js"></script>
</head>
<body>
    <div id="tudo" style="text-align:center;margin:15% 20%;border: 2px black solid">
    <h1>Acesse ao Sistema </h1>
    <Form method="POST" action="acessoAcePirates.php">
    <input class="barra" type="text" name="login" placeholder="Usuário" size=20 required>
    <br>
    <br>
    <input class="barra" type="text" name="senha" placeholder="Senha" size=20 required>
    <br>
    <br>
    <input type="submit" id="sub" name="sub" value="Enviar">
    <br>
    <br>
    </div>

    
</body>
</html>