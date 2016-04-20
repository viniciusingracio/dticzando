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



$marca=$_POST['marca'];
    $modelo=$_POST['modelo'];
    $patrimonio=$_POST['patrimonio'];
$status=$_POST['status'];
    $pagina=$_POST['pagina'];


// Pegando do html e salvando no banco
$cliente = array(
    'marca'   => $marca,
    'modelo'   => $modelo,
    'patrimonio'   => $patrimonio,
    'status'  => $status

);




    $grava = DBCreate($pagina, $cliente);

   if($grava)
        echo'OK';
    else
        echo'Falhou';
    header("Location: $pagina.php");

//--------------------------------//


// Leitura de dados
    $leitura = DBLer($pagina);

    foreach($leitura as $ler){

        echo $ler['marca'].'<br>';
        echo $ler['modelo'].'<br>';
        echo $ler['patrimonio'].'<br>';
        echo $ler['status'].'<br><hr>';
        echo $ler['id'].'<br><hr>';
    }


//--------------------------------------

//$delete= DBDelete('usuario');
//    if($delete)
//        echo 'ok';
//    else
//        echo 'NAO BERAS';


?>
</body>
</html>