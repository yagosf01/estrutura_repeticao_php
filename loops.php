<?php

echo '------ LOOP INTERNO E EXTERNO -------- <br>';
$i = 1;

while($i <= 3) { 
    echo 'Loop externo <br>';

    //segundo contador
    $j = 1;

    while($j <= 2) {
        echo 'Loop Intertno <br>';

        $j++;

    } //as viariaveis são globais, entao podemos usar nas div's pai/filho

    $i++;
}

$a = 10;

while($a > 10){
    if($a === 7 || $a === 5) { 

        echo  $a . '<br>';
        
        $a--;

        continue;
    }

    echo  $a .'<br>';

    $a--;
}

?>