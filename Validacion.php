<?php
$user = $_POST['correo'];
$pass = $_POST['pass'];

$usuario_validacion = 'abc@hotmail.com';
$pass_validacion = '12345';

if ($user == $usuario_validacion  and $pass == $pass_validacion) {
  header('Location: inicio.php');
}else {
  echo 'error de autenticacion';
}

 ?>
