<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count</title>
</head>
<body>
    <?php 
        $Palabras = ["Tren","Avion","Bicicleta","Camion","Submarino"];

        sort($Palabras);

        foreach($Palabras as $orden){
        echo "$orden" . "<br>";
        }
    ?>
</body>
</html>