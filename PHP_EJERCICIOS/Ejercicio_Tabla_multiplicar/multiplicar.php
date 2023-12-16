<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<table border="1">
        <tr>
            <th>Tabla de 5</th>
            <th>Tabla de 13</th>
            <th>Tabla de 11</th>
        </tr>



        <?php

            $tablas = array("primera"=>5, "segunda"=>13, "tercera"=>11);

            //Iterar sobre las filas (del 1 al 10)

            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";

                // Iterar sobre las columnas (cada tabla)
                foreach($tablas as $k => $v){

                    echo "<td>";
                    echo $v . "x" . $i . "=" . $v*$i;
                        "</td>";
                }
                
                
                
                
                
                    "</tr>";
            }
        ?>
</table>

</body>
</html>