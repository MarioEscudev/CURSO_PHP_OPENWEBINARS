<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ararrys asociativos</title>
</head>
<body>
    <?php 
        $navegadores = array("navegador1" => "Google" , "navegador2" => "Firefox", "navegador3" => "Safari");
        $datos = array ("nombre" => "Luisja", "edad" => 39, "profesor" => true, "dato3" => "100");
        echo "Navedador 3:" . $navegadores ["navegador3"];
        echo "<br>";
        echo "Nombre: " . $datos["nombre"];
        echo "<br>";
        echo "dato 3: " . $datos["dato3"];
        echo "<br>";
        var_dump($navegadores);
        echo "<br>";
        var_dump($datos);
    ?>
</body>
</html>