<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 4</title>
</head>
<body>
    <form method="post">
        Ingrese un número: <input type="number" name="numero">
        <input type="submit" value="aceptar" name="enviar">
    </form>

    <?php
        /*Escribir un programa en php que permita ingresar un número y
        que permita la descomposición del número en unidad, decena,
        centena, etc. */

        if ( isset($_POST['numero'])){
            $numero = $_POST['numero'];
            if (!is_numeric($numero) || strpos($numero, '.') !== false) {
                return 'Debe ingresar un número entero';
            }
            if ($numero < 0) {
                return 'El número debe ser positivo';
            }

            $numero = intval($numero);

            intval($unidades = $numero % 10);
            intval($decenas = ($numero % 100) / 10);
            intval($centenas = ($numero % 1000) / 100);
            intval($millares = ($numero / 1000));

            echo "El numero $numero se descompone en:";
            echo "$millares millares; $centenas centenas; $decenas decenas y $unidades unidades";
        }   
    ?>
    
    
</body>
</html>