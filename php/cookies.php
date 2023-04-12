<?php
session_start();

echo 'Iniciando sesiones...' . "<br>";
echo 'Sesiones iniciadas' . "<br>";

/*Observando información de la sesión*/
echo 'Id de la sesión: ' . session_id() . '<br>';
echo 'Nombre de la sesión: ' . session_name() . '<br>';

/**Creando variables de sesión */
$_SESSION['name'] = $_POST['nombre'];
$_SESSION['age'] = $_POST['edad'];

/**Recibiendo datos */
echo $_SESSION['name'].'<br>';
echo $_SESSION['age'].'<br>';

/*Borrando sesión*/
$_SESSION = array(); //Borra variables de sesión
//borrando cookie que almacena la sesión
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}

unset($_POST['nombre']);
unset($_POST['edad']);

session_destroy();
