<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    require '_Configuracao.php';
    require '_Conexao.php';
    require '_Database.php';



    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];


    // Pegando do html e salvando no banco
    $cliente = array(
        'nome'   => $nome,
        'sobrenome'   => $sobrenome,
        'email'   => $email,
        'senha'  => $senha

    );




    $grava = DBCreate('usuario', $cliente);

    if($grava)
        echo'OK';
    else
        echo'Falhou';
    header("Location: cadastrar.php");
