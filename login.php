<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == 'gustavo'){
    echo"Usuário correto";
}
elseif($usuario != 'gustavo'){
    echo"Usuário incorreto";
}

if($senha == '123'){
    echo"Senha correta";
}
elseif($senha != '123'){
    echo"Senha incorreta";
}