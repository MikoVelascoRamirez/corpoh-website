<?php
    if(isset($_POST["btnSend"])){
        include 'cookies.php';

        /*if(isset($_SESSION['name'], $_SESSION['age'])){
            echo $_SESSION['name'].'<br>';
            echo $_SESSION['age'].'<br>';
        } else{
            echo 'Las variables de sesión han expirado.<br>';
        }*/

        if(isset($_POST['nombre']) && isset($_POST['edad'])){
            echo 'Variables definidas, pero aún existen. <br>';
            echo $_POST['nombre'].'<br>'.$_POST['edad'];
        } else{
            echo 'No existen las variables.';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form id="formulario" name="formulario" method="post">
        <input type="text" name="nombre"><br>
        <input type="text" name="edad"><br>
        <input type="submit" value="Mandar datos" name="btnSend" id="btnSend">
    </form>
</body>
</html>