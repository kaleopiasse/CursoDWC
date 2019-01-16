<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

      <?php

        $agenda = array(
          "nome" => "Kaleo",
          "sobrenome" => "Piasse",
          "salario" => 1000
        );
        
        foreach($agenda as $atr => $valor) {
          echo $atr . ": " . $valor . "<br>";
        }
      ?>

    <body>
    </body>
</html>