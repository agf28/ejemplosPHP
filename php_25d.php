<?php
//Variable centinela y varieble contador
//Programa que escribe número de uno a 500 y se repite hasta que aparece un múltiplo de 7. Pero como mucho se repite 8 veces.

$salir = false;
$i = 1;//Contador



while ($salir == false && $i<8)
    $num = rand(1,500);
    echo ($num. "<br>");
    $i++;
    //$salir;
    if (($num % 7) == 0){
        $salir = true;
    }
?>