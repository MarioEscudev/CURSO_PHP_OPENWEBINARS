<?php
// Verificar si la cookie existe
if (isset($_COOKIE['nombre_cookie'])) {
    // Obtener el nombre de la cookie
    $nombre = $_COOKIE['nombre_cookie'];

    // Mostrar el mensaje
    echo "<h1>Hola $nombre</h1>";

    // Agregar botón para destruir las cookies y redirigir al formulario inicial
    echo '<form action="destruir-cookies.php" method="post">
              <button type="submit">Destruir Cookies</button>
          </form>';
} else {
    // Si no hay cookie, redirigir al formulario inicial
    header('Location: index.php');
}
?>
