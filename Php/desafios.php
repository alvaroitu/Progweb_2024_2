<div class="titulo">Desafio For</div>

<!-- 
Usar o for...
#
##
###
####
#####
1) Pode usar incremento $i++
2) Não pode usar incremento $i++
-->

<?php
$impressao = '';
for($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

echo '<hr>';

for(
    $impressao2 = '#';
    $impressao2 !== '######'; 
    $impressao2 .= '#'
) {
    echo "$impressao2 <br>";
}

echo '<hr>';

for($i = 1; $i <= 3; $i++) {
    for($j = 1; $j <= 3; $j++) {
        echo $i . $j . " ";
    }
    echo "<br>";
}

echo '<hr>';

for($i = 1; $i <= 3; $i++) {
    for($j = 1; $j <= 3; $j++) {
        if ($i == $j) {
            echo "** ";
        } else {
            echo $i . $j . " ";
        }
    }
    echo "<br>";    
}

echo '<hr>';

for($i = 1; $i <= 3; $i++) {
    for($j = 1; $j <= 3; $j++) {
        if ($i > $j) {
            echo "** ";
        } else {
            echo $i . $j . " ";
        }
    }
    echo "<br>";    
}

echo '<hr>';

for($i = 1; $i <= 3; $i++) {
    for($j = 1; $j <= 3; $j++) {
        if ($i < $j) {
            echo "** ";
        } else {
            echo $i . $j . " ";
        }
    }
    echo "<br>";    
}

echo '<hr>';

for($i = 1; $i <= 3; $i++) {
    for($j = 1; $j <= 3; $j++) {
        if ($i + $j == 4) {
            echo "** ";
        } else {
            echo $i . $j . " ";
        }
    }
    echo "<br>";    
}

echo '<hr>';

for($i = 1; $i <= 3; $i++) {
    for($j = 1; $j <= 3; $j++) {
        if ($i + $j > 4) {
            echo "** ";
        } else {
            echo $i . $j . " ";
        }
    }
    echo "<br>";    
}

function raiz($a){
    return sqrt($a);
}

echo "<br>";  

echo "A raiz é: " . raiz(25);
