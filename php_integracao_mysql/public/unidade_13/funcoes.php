<?php
    function enviarMensagem($dados) {
      // dados do form
      $nome  = $dados['nome'];
      $email = $dados['email'];
      $mensagem_usuario = $dados['mensagem'];

      // criar variaveis envio
      $destino = "kaleopiasse@gmail.com";
      $remetente = "kaleo_beta@hotmail.com";
      $assunto = "Mensagem do site";

      // corpo mensagem
      $mensagem = "O usuario ". $nome . "enviou uma mensagem."."</BR>";
      $mensagem .="email do usuario: ". $email . "</BR>";
      $mensagem .="mensagem: "."</BR>";
      $mensagem .= $mensagem_usuario;

      return mail($destino, $assunto, $mensagem, $remetente);
    }
?>