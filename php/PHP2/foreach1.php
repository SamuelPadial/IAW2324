<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $Refranes = ["A quien dios madruga", 
        "Mas vale 1 roja que 100 amarillo", 
        "No esta la miel hecha para la boca del asno"
        ];
        foreach ($Refranes as $mensaje){
            echo $mensaje . "<br>";
        }
    ?>
</body>
</html>