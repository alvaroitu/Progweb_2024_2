<!DOCTYPE html>
<html>
  <head>

  </head>
  <body>

<form action="" method="post" name="cadastre">
<input type="text" name="name" value="">
<input type="submit" name="cadastre" value="ENVIA DADOS">
</form>

<?php

if(isset($_POST['cadastre'])){
        $name = $_POST["name"];

        if($name>10){
          echo "o valor $name é maior que 10.";
        }
        else{
          echo "o valor $name não é maior que 10.";
        }


}
?>




  </body>
</html>
