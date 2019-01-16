<?php
    $a=5;
    $b=8;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        if($a>$b){
            echo "a é maior que b";
        } else if($a<$b){
            echo "b é maior do que a";
        } else {
            echo "a é igual a b";
        }
    ?>
    </body>
</html>