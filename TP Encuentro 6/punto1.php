<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 1</title>
</head>
<body>

    <form action="" method="post">
        Ingrese un número entre 1 y 9: <input type="text" name="numero" id="">
        <input type="submit" value="aceptar" name="enviar">
    </form>

    <?php
        /*Escriba una aplicación en php que permita el ingreso de un
        número entero entre 1 y 9 e imprima la tabla de multiplicar de dicho
        número. El resultado debe mostrarse usando la etiqueta Table de
        html*/      

        $enviar = $_REQUEST['enviar'];
        if ($enviar){
            $numero = $_REQUEST['numero'];
            echo "<table border='1' align='center'>";
            echo 
                "<tr>
                    <td colspan= 2> Tabla del ".$numero."</td>
                </tr>";
                for ($i=1; $i <= 10; $i++) { 
                    echo 
                    "<tr>
                        <td>" .$i. "</td>
                        <td>".($numero*$i)."</td>
                    </tr>";
                }
            echo  "</table>";
        }

    ?>


</body>
</html>