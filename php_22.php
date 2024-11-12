<?php
//BUCLE FOR
//BUCLE: Estructura de programación que se usa para repetir

//FOR lleva implicito tres parámetros: la inicialización, la condición y el 
//  for(inicialización; condición; incremento/decremento){
//      bloque codigo      
//  }

for ($i=1; $i <= 100; $i++) { 
    echo $i." ";
}

//Imprimir del 1 al 100
for ($i=1; $i <= 100 ; $i++) { 
    $msg = ($i == 100) ? "$i. ":"$i, ";
        echo $msg;
}
?>