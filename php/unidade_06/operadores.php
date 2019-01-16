<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $salario = 800;
        $premio = "800";

        if($salario === $premio){
            echo "Salario é identico a premio <br>";
        } else {
            echo "Salario não é identico a premio <br>";
        }
        if($salario == $premio){
            echo "Salario é igual a premio <br>";
        } else {
            echo "Salario não é igual a premio <br>";
        }

        $fumante =  true;
        if(!$fumante){
            echo "voce e fumante <br>";
        } else {
            echo "vc nao e fumante <br>";
        }

        $dia = "sabado";
        if($dia == "sabado" && $dia=="domingo"){
            echo "dia de descansar <br>";
        } else {
            echo "dia de trabalhar <br>";
        }
    ?>
    </body>
</html>