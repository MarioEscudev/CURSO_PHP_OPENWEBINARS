<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se ha enviado el formulario
    if (isset($_POST['nombre'])) {
        // Obtener el nombre del formulario
        $nombre = $_POST['nombre'];

        // Almacenar el nombre en una cookie
        setcookie('nombre_cookie', $nombre, time() + 3600); // Cookie válida por 1 hora
    }
}

// Redirigir a la página que muestra el mensaje
header('Location: mostrar-mensaje.php');
?>
