<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 2</title>
</head>
<body>

    <form method="post">
        Ingrese un número: <input type="number" name="numero">
        <input type="submit" value="aceptar" name="enviar">
    </form>


    <?php
        /*Escribir un programa en php que permita el ingreso un número
        cualquiera y mostrar en una tabla de 4 x 4 los 16 siguientes números
        primos de dicho número. La carga de la tabla debe ser por fila.*/

        if ( isset($_POST['numero'])){
            $numero = $_POST['numero'];
            $primos = array();
            $i= $numero + 1;

            while (count($primos) < 16){
                $es_primo = true;
                for ($j=2; $j < $i ; $j++){
                    if ($i % $j == 0){
                        $es_primo = false;
                        break;
                    }
                }
                if ($es_primo){
                    $primos[] = $i;
                }
                $i++;
            }
            echo "<table border='1' align='center'> ";
                $aux = 0;
                foreach ($primos as $primo) {
                    if($aux % 4 == 0){
                        echo "<tr>";
                    }
                    echo "<td>".$primo."</td>";
                    $aux++;
                    if ($aux % 4 == 0){
                        echo "</tr>";
                    }
                }
                
            echo "</table> ";


        }
        
    ?>
    
</body>
</html>