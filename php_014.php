<?php
    $resultado = $a + $b;
    echo "$a + $b es $resultado <br>";
    echo '$a + $b es resultado';

    //Resta
    $resultado = $a - $b;
    echo "$a - $b es $resultado <br>";
    echo "$a - $b es resultado";

    //Producto
    $resultado = $a * $b;
    echo "$a * $b es $resultado <br>";
    echo "$a * $b es resultado";

    //División
    $resultado = $a / $b;
    echo "$a / $b es $resultado <br>";
    echo "$a / $b es resultado";

    //División entera
    $resultado = (int)($a / $b);
    echo "$a / $b es $resultado <br>";
    echo "(int)($a / $b) es resultado";

    //Módulo el operador módulo es $%
    $resultado = $a % $b;
    echo "$a % $b es %resultado <br>";
    echo '$a % $b es %resultado <br>';

    //Incrementos-------------Decrementos//

    //Incremento post-incremento: devuelve el valor y luego lo incrementa

    $resultado = $a++;      //resultado = a; $a = $a + 1;
    echo "El valor de a con post-incremento es: $a. El valor de resultado es
    $resultado <br>";

    //Pre-incremento
    $resultado = ++$a; //aº $a + 1; 2º $resultado =$a;
    echo "el valor de a con pre-incremento es: $a. El valor de resultado es
    $resultado <br>";

    //Post-decrementos
    $a = 20;
    $resultado = $a--;
    echo "El valor de a con post-decremetno es $a. El valor de resultado es 
    $resultado <br>";

    //Pre-decremento
    $a = 20;
    $resultado = --$a;
    echo "El valor de a con pre-decremento es: $a . 
    El valor de resultado es:
    $resultado <br>";

    //Asignación con operadores---------------
    $a =20;
    $a += 10; //$a = $a +10;
    echo "El valor de 20 -= es: $a <br>";

    $a = 20;
    $a *= 10;
    echo "El valor de 20 *= 10 es: $a <br>";

    $a = 20;
    $a /= 10;
    echo "El valor de 2 + 3";

    //Prioridad de operadores
    $resultado = 2 +3 * 5;
    echo "El valor de 2 + 3 * 5 es $resultado";
    
    $resultado = (2+3) *5;
    echo "El valor es (2 + 3) *5 es $resultado";
?>