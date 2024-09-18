<?php
// tipos
echo "Numero inteiro <br>";
echo 1;
echo '<br>';
echo "<br> Numero decimal <br>";
echo 2.3;
echo '<br>';
echo "<br> String <br>";
echo "Essa é uma string";
echo '<br> <br>';
var_dump(1);
echo '<br>';
echo '<br>';
var_dump(2.1);
echo '<br> <br>';
var_dump("texto");
echo '<br> <br>';


echo "OPERAÇÕES ARITIMÉTICAS";
echo '<br>';
echo "<br> Primeiro calculo <br>";
echo  1 + 3;
echo '<br>';
echo "<br> Segundo calculo <br>";
echo  2 * 3.5;
echo '<br>';
echo "<br> Terceiro calculo <br>";
echo  25 / 3;
echo '<br> <br>';
echo "Usando round: " . round(1234567.89123, 2);
// Resultado: 1234567.89
echo '<br> <br>';
echo "number_format sem separadores: " . number_format(1234567.89123, 2);
// Resultado: 1,234,567.89
echo '<br> <br>';
// Usando number_format com separadores de milhares
echo "number_format com separadores";
echo number_format(1234567.89123, 2, ',', '.');
// Resultado: 1.234.567,89
echo '<br> <br>';

echo "Modulo - ou resto da divisão <br>";
echo 7 % 4;
echo '<br> <br>';
echo "Numero impar <br>";
echo 7 % 2;
echo '<br> <br>';
echo "Numero par <br>";
echo 8 % 2;
echo '<br> <br>';
echo "Expoente <br>";
echo 3 ** 2;
echo '<br> <br>';
echo "PRECEDÊNCIA <br>";
echo "() => ** => / * % => + - ";
echo '<br> <br>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo '<br> <br>';

echo "STRING <br>";
echo "Eu sou uma string <br>";
echo "<br>";
echo "Concatenação <br>";
echo "Vai" . "curinthians <br>";
echo "Vai" . " curinthians <br>";
echo '<br>';
echo "ASPAS <br>";
echo " 'simples' " . ' "dupla" '; 
echo '\'simples simples\'' . " \"dupla dupla\" ";
echo '<br> <br>';

echo "BOOELEANO <br>";
echo true;
echo '<br>';
echo false;
echo '<br>';
echo var_dump(true);
echo '<br>';
echo var_dump(false);
echo '<br>';
echo is_bool(false);
echo '<br>';
echo is_bool("true");
echo"<br>";
echo "Teste booleano <br>";
if (is_bool("true")) {
    echo "É booleano";
} else {
    echo "Não é booleano";
}






