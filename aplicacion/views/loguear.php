<?php
require 'conexionBD.php';
session_start();

$usuario = $_POST('usuario');
$contraseña = $_POST('contraseña');

$q = "SELECT COUNT(*) as contar from profesor where usuarioProfesor = '$usuario' and contraseñaProfesor = '$contraseña'";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if($array('contar')>0){
    $_SESSION('username') = $usuario;
    header("location: /aplicacion/INICIO.php");

}else{
    echo "DATOS INCORRECTOS";
}

?>