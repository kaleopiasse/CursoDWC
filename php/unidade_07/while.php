<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

      <?php
        $contador = 1;
        while($contador <= 10){
          $sorteio = rand(1,6);
          echo $sorteio . " ";
          $contador ++;
        } 
      ?>

    <body>
    </body>
</html>