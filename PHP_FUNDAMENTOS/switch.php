<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    

    <?php
        $dia = 3;
        switch($dia){

            case 1:
                echo "Lunes";
                break;

            case 2:
                echo "Martes";
                break;

            case 3:
                echo "Miercoles";
                break; 

            case 4:
                echo "Jueves";
                break; 
                
            case 5:
                echo "Viernes";
                break;
                
            case 6:
                echo "Sabado";
                break;

            case 7:
                echo "Domingo";
                break;
                default:
                    "dia no valido";
        }

        echo "<p></p>";

        $dia = "MIERCOLES";
        switch($dia){

            case "LUNES";
            echo 1;
            break;
            
            case "MARTES";
            echo 2;
            break;

            case "MIERCOLES";
            echo 3;
            break;

            case "JUEVES";
            echo 4;
            break;

            case "VIERNES";
            echo 5;
            break;

            case "SABADO";
            echo 6;
            break;

            case "DOMINGO";
            echo 7;
            break;

            default:
                    "dia no valido";
            
        }
    ?>
</body>
</html>