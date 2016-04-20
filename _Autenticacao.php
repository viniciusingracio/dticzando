<?php

    require '_Configuracao.php';
    require '_Conexao.php';
    require '_Database.php';
?>


<html>
    <head>
        <script>
        function  loginsucesso(){

       window.location.assign('home.php');

        }

        function loginfalha(){

            window.location.assign('index.php?incorreta=true');


        }


        </script>

    </head>


    <body>


<?php
$email=$_POST['email'];
$senha=$_POST['senha'];


$sql= DBverifica($email, $senha);
$row= mysqli_num_rows($sql);

if ($row>0) {

    session_start();
    $_SESSION['email']=$_POST['email'];
    echo "<script>loginsucesso()</script> ";
}

    else {


        echo " <script>loginfalha()</script>";

    }

?>

</body>

</html>
