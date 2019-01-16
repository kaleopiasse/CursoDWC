<?php
    $salada = array("maca","abacate","laranja");
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Existe elemento? ". in_array("pera",$salada)."</br>";
            echo "Existe elemento? ". array_search("uva",$salada)."</br>";
            echo "Existe elemento? ". in_array("maca",$salada)."</br>";
            echo "Existe elemento? ". array_search("abacate",$salada)."</br>";
        ?>
    </body>
</html>