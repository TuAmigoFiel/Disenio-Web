<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
        Ingrese un número en binario: <input type="number" name="numero">
        <input type="submit" value="aceptar" name="enviar">
    </form>

    <?php
        /*Escriba un programa que permita el ingreso de un numero binario
        e imprima su equivalente en decimal y hexadecimal. */

        if ( isset($_POST['numero'])){
            $numero = $_POST['numero'];

            if (!preg_match('/^[01]+$/', $numero)) {
                echo '<p>Debe ingresar un número binario válido</p>';
            } else {
                $decimal = bindec($numero);
                $hexadecimal = dechex($decimal);

                echo "El numero binario $numero convertido a decimal es $decimal y en hexadecimal: $hexadecimal";
            }

        }
    ?>
</body>
</html>