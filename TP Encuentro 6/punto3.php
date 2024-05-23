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
        Ingrese un número del 0 al 9: <input type="number" name="numero">
        <input type="submit" value="aceptar" name="enviar">
    </form>

    <?php
        /*Escribir un programa en php que permita el ingreso de una cifra y
        como resultado muestra dicha cifra en letras. */
        // Función para convertir una cifra en letras

        if ( isset($_POST['numero'])){
            $cifra = intval($_POST['numero']);
            
            $letra = ['cero', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve'];

            switch ($cifra) {
                case 0:
                    echo "La cifra $cifra se lee como $letra[0]";
                    break;
                case 1:
                    echo "La cifra $cifra se lee como $letra[1]";
                    break;
                case 2:
                    echo "La cifra $cifra se lee como $letra[2]";
                    break;
                case 3:
                    echo "La cifra $cifra se lee como $letra[3]";
                    break;
                case 4:
                    echo "La cifra $cifra se lee como $letra[4]";
                    break;
                case 5:
                    echo "La cifra $cifra se lee como $letra[5]";
                    break;
                case 6:
                    echo "La cifra $cifra se lee como $letra[6]";
                    break;
                case 7:
                    echo "La cifra $cifra se lee como $letra[7]";
                    break;
                case 8:
                    echo "La cifra $cifra se lee como $letra[8]";
                    break;
                case 9:
                    echo "La cifra $cifra se lee como $letra[9]";
                    break;
                default:
                    # code...
                    break;
            }
        }
       
    ?>

</body>
</html>