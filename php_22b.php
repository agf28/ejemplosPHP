<!--Transformamos el siguiente for en un bucle while
WHILE: tiene la condición antes de entrar en el bucle, por lo tanto
CUIDADO! PUEDE QUE NUNCA SE LLEGUE A ENTRAR.
WHILE es un bucle que se ejecuta mientras se cumpla una condición. 
No lleva inicilización
-->
<?php
    // for ($i =1,$i <= 100; $i++){
    //     echo $i." ";
    // }

    $i =1;
    while ($i <= 100) {
        echo $i. " ";
        $i++;
    }

    //DO: la condición se ejecuta al final. OJO! ALMENOS SE EJECUTA UNA VEZ EL BUCLE.

echo "Con bucle DO e incremento antes de imprimir";
$j = 1;
do{
    echo $j. " ";
    $j++;
}while($j <= 100);
?>