<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php

        $array = array(1, 2, 3, 4, 5, 6);
        $valores = array("uno" => 1,"dos" => 2,"tres" => 3,"diecisiete" => 17);

        //Estructuras de control de flujo de repetición

	//Recorrer un array
    foreach($array as $valor){
        echo $valor;
        echo "<p> </p>";
    }

    //Recorrer un array asociativo
    foreach($valores as $k => $v){
        echo "valores [$k] => $v.";
        echo "<br/>";
        
    }

    ?>
</body>
</html>