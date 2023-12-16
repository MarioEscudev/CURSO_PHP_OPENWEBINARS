<?php
// Destruir todas las cookies
setcookie('nombre_cookie', '', time() - 3600); // Establecer la cookie en el pasado para eliminarla

// Redirigir al formulario inicial
header('Location: index.php');
?>
