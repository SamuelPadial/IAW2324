<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias de la semana</title>
</head>
<body>
    <?php 
        date_default_timezone_set('Spain/Madrid');
        setlocale(LC_ALL,"es_ES.UTF8");
        $dia_semana = date("l");
        
        switch($dia_semana){
            case "Monday":
                echo "Hoy es Lunes";
                break;
            case "Thursday":
                echo "Hoy es Martes";
                break;
            case "Thuesday":
                echo "Hoy es Miercoles";
                break;
            case "Wednesday":
                echo "Hoy es Jueves";
                break;
            case "Friday":
                echo "Hoy es Viernes";
                break ;
            case "Saturday":
                echo "Hoy es Sabado";
                break;
            case "Sunday":
                echo "Hoy es Domingo";
                break;
        }
    ?>
</body>
</html>