<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
      <?php
        $data1 = new DateTime('2011-10-30');
        $data2 = new DateTime('2014-12-31');
        $intervalo = $data1->diff($data2);
      ?>
      <pre>
        <?php
          print_r($intervalo);
        ?>
      </pre>
      <pre>
        <?php
          print_r($intervalo->format('%a'));
        ?>
      </pre>
    </body>
</html>