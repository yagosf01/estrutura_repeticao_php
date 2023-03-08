<?php
echo '------- FOR --------- <br>';
// for(contador; condição; incremento) { codigo }

for($f = 0; $f < 5; $f++) {
    echo "Testando for $f <br>";

}
echo "--------- FOR com if ------- <br>";


for($g = 0; $g < 5; $g++) {
    if($g == 2) {
        echo "IF na estrutura <br>";

    }

    echo "testando for $g <br>"; 
}
echo "-------- Exercicio --------- <br>";
//imprima numros pares do array

$arr3 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
for($v = 0; $v < count($arr3); $v++) {
    if($arr3[$v] % 2 == 0) {
        echo "o numero é par $arr3[$v] <br>";
    }
}

echo "------- EXERCICIO ----------- <br>"; 
// crie um array usando a ferramenta de loop for 
$arr4 = [];
for($c = 1; $c <= 10; $c++) {
    array_push($arr4, $c);

}

print_r($arr4) . "<br>"; 
// metodo para printar o array
echo "<br>";


echo "------- EXERCICIO ----------- <br>";

$arr5 = [];

for($d = 10; $d <= 20; $d++) {
    array_push($arr5, $d);
}
print_r($arr5);
echo "<br>";
echo "------------------- <br>";

for($d = 0; $d < count($arr5); $d++) {

    if($arr5[$d] %2 != 0) {
        echo "Esse numero é impar $arr5[$d] <br>";
    }
}
?>