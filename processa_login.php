<?php

require("./funcoes.php");

require("./areaRestrita.php");

session_start();

// realizarLogin($_POST["nome"], $_POST["senha"], lerArquivo("./dados/usuarios.json"));

// header('location: areaRestrita.php');

if($_POST['usuario']='MarcelEntidade' && $_POST['senha']='idMarcel'){
    $_SESSION['usuario'] = $_POST['usuario'];
    header('location: areaRestrita.php');
}