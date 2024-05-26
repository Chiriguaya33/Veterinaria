<?php

/*include_once '../model/Usuario.php';*/

session_start();

/*if (isset($_POST['user']) && isset($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    echo "User: $user, Pass: $pass"; // Línea de depuración

    $usuario = new Usuario();
    $usuario->Loguearse($user, $pass);

    foreach($usuario->objetos as $objeto) {
        print_r($objeto);
    }
} else {
    // Maneja el caso en el que no se envían los datos del formulario
    echo "Por favor, complete el formulario de inicio de sesión.";
}*/

$user = $_POST['user'];
$pass = $_POST['pass'];
echo $user;
echo " ";
echo $pass;
/*$usuario = new Usuario();
$usuario->Loguearse($user,$pass);

foreach($usuario->objetos as $objeto) {
    print_r($objeto);
}*/

?>