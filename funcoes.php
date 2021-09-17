<?php

function lerArquivo($nomeArquivo)
{
    $arquivo = file_get_contents($nomeArquivo);

    $jsonArray = json_decode($arquivo);

    return $jsonArray;
}

/* 
parâmetros:

1 - usuário do form
2 - senha vindo do form
3 - dados do arquivo json de usuário e senha
*/

function realizarLogin($usuario, $senha, $dados)
{
    foreach ($dados as $dado) {

        if ($dado->usuario == $usuario && $dado->senha == $senha) {

            //variáveis de sessão
            $_SESSION["usuario"] = $dado->usuario;
            $_SESSION["id"] = session_id();
            $_SESSION["dataHora"] = date('d/m/Y - h:i:s');

            header('location: processa_login.php');
            exit;
        } else {

            header('location: index.php');
            exit;
        }
    }
}
