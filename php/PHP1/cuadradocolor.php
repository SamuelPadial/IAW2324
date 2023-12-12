<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado</title>
    <style>
        .caja {
            width: 300px;
            height: 300px;
        }
    </style>
</head>
<body>
    <?php 
        $R = dechex(rand(0,255)); 
        $V = dechex(rand(0,255));
        $A = dechex(rand(0,255));

        $SquareColor = '#' . $R . $V . $A;

        echo '<div class="caja" style=background-color:' . $SquareColor '></div>';
    ?>
</body>
</html>