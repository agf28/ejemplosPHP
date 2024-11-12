<!--ejercicio con BUCLE CENTINEL. Hay una variable que me dice si nos salimos del bucle al cumplirse una condición.

Programa que escriba números aletorios entre uno y 500 y se pare cuando el número sea multiplo de 7-->
<?php

$i = 1;
while ($i < 4){
    $num = rand(1,500); //random()
    echo "$num <br>";
    $i++; 
}

$salir = false;

while (!$salir) {   //Mientras no sea verdadero
    $num = rand(1,500);
    echo "$num <br>";
    $salir = ($num % 7 == 0); //El centinela vale verdadero si es multiplo de 7
    //  if($num % 7 == 0){
    //  $salir = true;
    //}
}

?>