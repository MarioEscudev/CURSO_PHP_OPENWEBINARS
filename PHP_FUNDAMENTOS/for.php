<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
        <?php

        $num = 5;
             //Estructuras de control de flujo de repetición

	        //Números del 1 al 10
            for ($i=1;$i<=10;$i++){
                echo $i; 
                echo "<br/>";
            }

            echo "<p> </p>";

            //Números del 10 al 1
            for($j=10;$j>=1;$j--){
                echo $j;
                echo "<br/>";

            }

            echo "<p> </p>";

            //Números pares entre el 0 y el 10
            for($k=0;$k<=10;$k=$k+2){

                echo $k;
                echo "<br/>";
            }

            echo "<p> </p>";

          	//Números pares entre el 0 y el 10
	for ($l=2;$l<=100;$l++){
		if($l%2 == 0){
			echo $l;
			echo "<br/>";
		}
	}

            echo "<p> </p>";

    for($m=1;$m<=10;$m++){

        echo $num . "x" . $m . "=" . $m*$num;
        echo "<br/>";
    }




        ?>
</body>
</html>