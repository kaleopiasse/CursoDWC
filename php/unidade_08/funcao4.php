<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      <?php
        function retornarDiaria($diaria, $dias, $cotacao){
          $real =  number_format($diaria/$dias, 2);
          $dolar = number_format(($diaria/$dias)/$cotacao, 2);
          return array($real, $dolar);
        }

        list($real, $dolar) = retornarDiaria(1100, 22, 2.5);
        echo "R$" . $real . "<br>" . "$" . $dolar;
      ?>

    </body>
</html>