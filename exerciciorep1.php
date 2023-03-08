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
?>