<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach2</title>
</head>
<body>
    <?php 
        $Palabras = [
            "hielo" => "ice",
            "agua" => "water",
            "sonrisa" => "smile",
            "vapor" => "steam",
            "tren" => "train"
        ];

        foreach($Palabras as $ES => $EN){
            echo "$ES = $EN" . "<br>";
        }

        $Contador = count($Palabras,1);
        echo "Hay " . $Contador . " palabras <br>";
    ?>
</body>
</html>