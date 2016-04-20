<?php
    require '_Configuracao.php';
    require '_Conexao.php';
    require '_Database.php';


    $pagina = $_GET['pagina'];
    $id = $_GET['id'];


    $delete= DBDelete($pagina, $id);
    header("Location: remover.php");
