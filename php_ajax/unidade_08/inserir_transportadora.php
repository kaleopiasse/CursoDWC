  <?php
    $conecta = mysqli_connect("localhost","root","skiter","andes");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    if(isset($_POST["nometransportadora"])) {
        $nome       = $_POST["nometransportadora"];
        $endereco   = $_POST["endereco"];
        $cidade     = $_POST["cidade"];
        $estado     = $_POST["estados"];
        
        $inserir    = "INSERT INTO transportadoras ";
        $inserir    .= "(nometransportadora,endereco,cidade,estadoID) ";
        $inserir    .= "VALUES ";
        $inserir    .= "('$nome','$endereco','$cidade', $estado)";
        
        $retorno = array();
        $operacao_insercao = mysqli_query($conecta, $inserir);

        if($operacao_insercao) {
            $retorno["sucesso"] = true;
            $retorno["mensagem"] = 'Inserido com sucesso';
        } else {
            $retorno["sucesso"] = false;
            $retorno["mensagem"] = 'Falha na inserção';
        }

        echo json_encode($retorno);
    }
?>