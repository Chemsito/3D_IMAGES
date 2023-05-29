<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // Aquí puedes realizar la lógica de registro según tus necesidades
  
  // Ejemplo de registro básico (no recomendado para uso en producción)
  echo 'Registro exitoso';
}
?>
