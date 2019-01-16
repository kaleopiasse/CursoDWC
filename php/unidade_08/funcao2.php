<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      <?php
        function retornarDiaria($valor){
          return number_format($valor/30, 2);
        }

        echo retornarDiaria(1100);
      ?>

    </body>
</html>