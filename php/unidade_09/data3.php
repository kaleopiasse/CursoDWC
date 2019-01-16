<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      <?php
        date_default_timezone_set('America/Sao_Paulo');
        setlocale(LC_ALL, "pt_BR");
        $ano = strftime('%Y');
        $mes = strftime('%B');
        $dia = strftime('%d');
        $hora = strftime('%H');
        $diaSemana = strftime('%A');
        $minuto = strftime('%M');
        $segundo = strftime('%S');
        echo $diaSemana . " , " . $dia . " de " . $mes . " de " . $ano. " - " . $hora . ":" . $minuto . ":" . $segundo;
      ?>
    </body>
</html>