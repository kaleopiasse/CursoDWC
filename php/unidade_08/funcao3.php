<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      <?php
        function retornarDiaria($diaria, $dias){
          return number_format($diaria/$dias, 2);
        }

        echo retornarDiaria(1100, 22);
      ?>

    </body>
</html>