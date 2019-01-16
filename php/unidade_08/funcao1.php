<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      <?php
        function retornarDiaria(){
          return number_format(800/30, 2);
        }

        echo retornarDiaria();
      ?>

    </body>
</html>