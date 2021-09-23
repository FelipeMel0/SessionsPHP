<?php

session_start();

require_once('./funcoes.php');

//Primeiro teste:

// $dados = lerArquivo('dados/usuarios.json');

// var_dump($dados); exit;

// realizarLogin('marcel', 'idmarcel', $dados);

// realizarLogin('cristiano', '123456', lerArquivo('dados/usuarios.json'));

// echo "Nome do usuário: " . $_SESSION["usuario"] . "<br/>";
// echo "Id da sessão: " . $_SESSION["id"] . "<br/>";

verificarLogin();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Área restrita</title>
</head>

<body>

    <h1>Área restrita, baby 😉</h1>

    <div class='toolbar'>

        <h2>

            <?php echo 'Olá ' . strtoupper($_SESSION['usuario']) . ' - Login efetutado em: ' . $_SESSION['dataHora']; ?>

        </h2>

        <h2>

            <a class="material-icons" href="processa_login.php?logout=true">logout</a>

        </h2>

    </div>

</body>

</html>