<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo "trimestre: ". $salario * $meses . "</br>";
            echo "quinzena: " . $salario / 2 . "</br>";
            // Exponencial
            echo "exponencial: " . pow(6,3) . "</br>";
            // Raiz Quadrada
            echo "raiz quadrada: " . sqrt(36) . "</br>";
            // Randômico Generica
            echo "randomico: " . rand(). "</br>";
            // Randômico entre um intervalo
            echo "randomico: " . rand(1,10) . "</br>";
            // Valor absoluto
            echo "absoluto: " . abs(-10). "</br>"
        ?>
    </body>
</html>