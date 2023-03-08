<?php
echo '-------------- Exercicio ------------------ <br>';
$arr2 = [10,20,30,40,50,60,70,80,90,100];
$z = count($arr2);
$w = 0;

while($w < $z) {

    $numeroAtual = $arr2[$w]; //DICA( falicilitar na digitação) 

    if($arr2[$w] == 30 || $arr2[$w] == 40) {
        $w++;
        continue;

    }

    echo $numeroAtual . '<br>';
    
    $w++;
}
?>