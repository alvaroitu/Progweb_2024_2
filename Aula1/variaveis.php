<!Doctype html>
<html>
<head>
</head>
<body>
<?php
// Declaração de variáveis
$nome = "João";             // Variável string
$idade = 30;                // Variável integer
$altura = 1.75;             // Variável float
$casado = true;             // Variável boolean

// Exibindo valores das variáveis
echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . " anos<br>";
echo "Altura: " . $altura . " metros<br>";

// Condicional utilizando a variável booleana
if ($casado) {
    echo "Estado civil: Casado<br>";
} else {
    echo "Estado civil: Solteiro<br>";
}

// Operações com variáveis
$idade_ano_que_vem = $idade + 1;
echo "Idade no próximo ano: " . $idade_ano_que_vem . " anos<br>";

// Concatenando strings
$mensagem = "Olá, meu nome é " . $nome . " e eu tenho " . $idade . " anos.";
echo $mensagem;
?>
    
</body>
</html>