<?php require_once("../../conexao/conexao.php")?>
<?php
  $consulta_categorias = "select * from categorias";
  $categorias = mysqli_query($conecta, $consulta_categorias);
  if ( !$categorias ) {
    die("Falha na consulta ao banco");
  }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      <ul>
        <?php
          while ( $registro = mysqli_fetch_assoc($categorias) ) {
        ?>
          <li><?php echo $registro["nomecategoria"] ?></li>
        <?php
          }
        ?>
      </ul>
      <?php
        mysqli_free_result($categorias);
      ?>
    </body>
</html>
<?php
  mysqli_close($conecta);
?>