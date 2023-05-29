<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // Aquí puedes realizar la lógica de autenticación según tus necesidades
  
  // Ejemplo de verificación básica (no recomendado para uso en producción)
  if ($username === 'usuario' && $password === 'contraseña') {
    echo 'Inicio de sesión exitoso';
  } else {
    echo 'Nombre de usuario o contraseña incorrectos';
  }
}
?>
