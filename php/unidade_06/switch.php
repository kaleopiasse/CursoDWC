<?php
    $dia = "quarta"
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        switch($dia){
            case "segunda":
                echo "segunda <br>";
                break;
                case "quarta":
                echo "quarta <br>";
                break;
                case "sexta":
                echo "sexta <br>";
                break;
                default:
                echo "nenhum";
        }
    ?>
    </body>
</html>