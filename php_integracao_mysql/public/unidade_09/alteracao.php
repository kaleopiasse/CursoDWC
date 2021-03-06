<?php require_once("../../conexao/conexao.php"); ?>
<?php

  if(isset($_POST["nometransportadora"])){
    $nome = $_POST["nometransportadora"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estados"];
    $cep = $_POST["cep"];
    $telefone = $_POST["telefone"];
    $cnpj = $_POST["cnpj"];
    $tID = $_POST["transportadoraID"];

    echo $nome . " " . $endereco . " " . $cidade . " " . $estado . " " . $cep . " " . $telefone . " " . $cnpj . " " . $tID;

    $alterar = "UPDATE transportadoras SET ";
    $alterar .= "nometransportadora = '{$nome}', ";
    $alterar .= "endereco = '{$endereco}', ";
    $alterar .= "cidade = '{$cidade}', ";
    $alterar .= "estadoID = {$estado}, ";
    $alterar .= "cep = '{$cep}', ";
    $alterar .= "telefone = '{$telefone}', ";
    $alterar .= "cnpj = '{$cnpj}' ";
    $alterar .= "WHERE transportadoraID = {$tID} ";

    $operacao_alterar = mysqli_query($conecta, $alterar);
    if(!$operacao_alterar) {
      echo mysqli_error($conecta);
    } else {
      header("location: listagem.php");
    }
  }

  //Consulta transportadoras
  $tr = "SELECT * from transportadoras ";
  if(isset($_GET["codigo"])){
    $id = $_GET["codigo"];
    $tr .="WHERE transportadoraID = {$id} ";
  } else {
    $tr .="WHERE transportadoraID = 1";
  }

  $con_transportadora = mysqli_query($conecta, $tr);
  if(!$con_transportadora){
    die("Erro na consulta");
  }

  $info_transportadoras = mysqli_fetch_assoc($con_transportadora);

  //print_r($info_transportadoras);

  // selecao de estados
  $select = "SELECT estadoID, nome ";
  $select .= "FROM estados ";
  $lista_estados = mysqli_query($conecta, $select);
  if(!$lista_estados) {
      die("Erro no banco");
  }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/alteracao.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>  
            <div id="janela_formulario">
              <form action="alteracao.php" method="post">
                <h2>Alteração de transportadoras</h2>
                <label for="nometransportadora">Nome da transportadora</label>
                <input type="text" value="<?php echo $info_transportadoras["nometransportadora"]?>" name="nometransportadora" id="nometransportadora">
                <label for="endereco">Endereço</label>
                <input type="text" value="<?php echo $info_transportadoras["endereco"]?>" name="endereco" id="endereco">
                <label for="cidade">Cidade</label>
                <input type="text" value="<?php echo $info_transportadoras["cidade"]?>" name="cidade" id="cidade">
                <label for="estados">Estado</label>
                <select type="text" value="" name="estados">
                <?php
                  $meuestado = $info_transportadoras['estadoID'];
                  while($linha = mysqli_fetch_assoc($lista_estados)) {
                    $estado_princiapl = $linha["estadoID"];
                    if($meuestado == $estado_princiapl) {
                ?>
                  <option value="<?php echo $linha["estadoID"];  ?>" selected>
                    <?php echo $linha["nome"];  ?>
                  </option>
                <?php
                    } else {
                ?>
                  <option value="<?php echo $linha["estadoID"];  ?>">
                    <?php echo $linha["nome"];  ?>
                  </option>
                <?php
                    }
                  }
                ?> 
                </select>
                <label for="cep">CEP</label>
                <input type="text" value="<?php echo $info_transportadoras["cep"]?>" name="cep" id="cep">
                <label for="">Telefone</label>
                <input type="text" value="<?php echo $info_transportadoras["telefone"]?>" name="telefone" id="telefone">
                <label for="cnpj">CNPJ</label>
                <input type="text" value="<?php echo $info_transportadoras["cnpj"]?>" name="cnpj" id="cnpj">
                <input type="hidden" value="<?php echo $info_transportadoras["transportadoraID"]?>" name="transportadoraID" id="transportadoraID" >
                <input type="submit" value="Confirmar alteração">
              </form>
            </div>
        </main>

        <?php include_once("_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>