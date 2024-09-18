<!DOCTYPE html>
<html>

<head>

</head>

<body>
  <p> entre com o valor do salario </p>
  <form action="" method="post" name="cadastre">
    <input type="text" name="a" value="">
    </br>
    <input type="submit" name="cadastre" value="ENVIA DADOS">
  </form>

  <?php
  if (isset($_POST['cadastre'])) {
      $salario = $_POST["a"];

      $reajuste30 = $salario * 0.3;
      $reajuste50 = $salario * 0.5;

    /*  echo "O valor do salario é - $salario";
      echo "</br>";
      echo "O valor da soma de B e D é - $soma_b_d";
      echo "</br>";
      echo "</br>";*/

      if ($salario > 2000) {
          $salarioreajustado = $salario + $reajuste30;
          echo $salarioreajustado;
      } else {
          $salarioreajustado = $salario + $reajuste50;
          echo $salarioreajustado;
      }
  }
    ?>

</body>

</html>