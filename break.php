<?php 
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
?> 
