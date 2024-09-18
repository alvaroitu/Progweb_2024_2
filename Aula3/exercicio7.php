<!DOCTYPE html>
<html>
  <head>

  </head>
  <body>

<form action="" method="post" name="cadastre">
<label> valor a </label>
<input type="text" name="a" value="">
</br>
<label> valor b </label>
<input type="text" name="b" value="">
</br>
<label> valor c </label>
<input type="text" name="c" value="">
</br>
<label> valor d </label>
<input type="text" name="d" value="">
</br>
<input type="submit" name="cadastre" value="ENVIA DADOS">
</form>

<?php

if(isset($_POST['cadastre'])){
        $A = $_POST["a"];
        $B = $_POST["b"];
        $C = $_POST["c"];
        $D = $_POST["d"];

   $soma_a_c = $A + $C;
   $soma_b_d = $B + $D;

    echo "O valor de A é - $A";
    echo "</br>";
    echo "O valor de B é - $B";
    echo "</br>";
    echo "O valor de C é - $C";
    echo "</br>";
    echo "O valor de D é - $D";
    echo "</br>";
    echo "</br>";
    echo "</br>";
    echo "O valor da soma de A e C é - $soma_a_c";
    echo "</br>";
    echo "O valor da soma de B e D é - $soma_b_d";
    echo "</br>";
    echo "</br>";

    if($soma_a_c>$soma_b_d){
      echo "A+C é maior que B+D";
    }
    else {
      echo "A+C é menor que B+D";
    }
}
?>




  </body>
</html>
