<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

      <?php
        $contador = 1;
        do {
          $sorteio = rand(1,6);
          echo $sorteio . " ";
          $contador ++;
        } while($contador <= 10)
      ?>

    <body>
    </body>
</html>