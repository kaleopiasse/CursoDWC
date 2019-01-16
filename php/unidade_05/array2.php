<?php
    $agenda = array("nome" => "kaleo", 
                    "sobrenome" => "piasse",
                    "salario" => 800.99
                );
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <pre>
        <?php
            print_r($agenda);
        ?>
    </pre>
    <?php //echo $agenda[0]; ?>
    </body>
</html>