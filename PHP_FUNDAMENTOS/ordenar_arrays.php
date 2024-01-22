<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dias = array ( "Lunes", "Martes", "Miercoles", "jueves", "Viernes", "Saabado", "Domingo");

        /**var_dump($dias);
        echo "<br>"; 

        asort ($dias);
        rsort ($dias);
        var_dump ($dias);
        echo "<br>";**/

        /**$numeros =array (10,11,8,103,99,54);
        var_dump ($numeros);
        echo "<br>";

        ksort($numeros);
        var_dump($numeros);
        echo "<br>";**/

        $arraynombres = array("Javier" =>  "29", "Paatricia" => "18", "Mario" => "30");
        var_dump ($arraynombres);
        echo "<br>";

        ksort($arraynombres);
        var_dump($arraynombres);
        echo "<br>";
    ?>
</body>
</html>