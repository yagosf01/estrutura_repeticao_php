<?php
echo '--- PRINT NO ARRAY ----- <br>';
$arr = ["Skate", 10, 20 ,"Bola", true,"Mouse"];
$x = count($arr); // Vai contar automaticamente o array
$y = 0;

while($y < $x) {
    
    if(is_string($arr[$y])){
        echo $arr[$y] . "<br>";
    }
    $y++;
}
echo '--------- BREAK ----------- <br>';
$inicio = 4;
$limite = 30;

while($inicio < $limite) {
    echo $inicio . '<br>';

    if($inicio === 24) {
        echo 'Parando o loop <br>';
        break;
    }

    $inicio += 2;

}
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
echo '--------- DO WHILE ---------- <br>'; 
$b = 0;

do{
    echo 'Teste DO WHILE <br>';

    $b++;

} while($b < 5);

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

echo "------- FOREACH ------- <br>";
// foreach($array as $item) {codigo}

$nomes = ["Yago", "Laura", "Livia", "Ricardo","Celso","João"];

foreach($nomes as $nome) {
    echo "O nome do indice atual é $nome <br>";
}










?>