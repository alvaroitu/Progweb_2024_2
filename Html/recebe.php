<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_GET['nome'];
    echo "O nome enviado via GET foi: " . $nome;
    ?>


    <?php
    $nome = $_POST['nome'];
    echo "O nome enviado via POST foi: " . $nome;
    ?>
    
</body>
</html>


