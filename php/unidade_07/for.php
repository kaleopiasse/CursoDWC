<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

      <?php
        
        for ($contador = 1; $contador <= 10; $contador ++){
          if($contador == 7) {
            break;
          }
          $sorteio = rand(1,6);
          echo $sorteio . " ";
        } 
      ?>

    <body>
    </body>
</html>