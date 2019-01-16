<?php
    $idade = 17;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $maioridade = ($idade>17)? "maior" : "menor";
        echo $maioridade; 
    ?>
    </body>
</html>