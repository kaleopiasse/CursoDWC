<?php
    if( isset($_POST["formulario"])){
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : 'Sem definicao'; 
        $email = isset($_POST["email"]) ? $_POST["email"] : 'Sem definicao'; 
        echo $nome . " " . $email;
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <form action="destino.php" method="POST">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            
            <input type="submit" name="formulario" value="Enviar Cadastro">
        </form>
    </body>
</html>