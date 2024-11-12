<?php
//Operadores de comparación que son usados en la condición de las estructuras condicionales
// == : igual
// !=: diferente
// >,<, >=,<=
$nota = 7;

if($nota >= && <= 5){
    echo "La nota $nota es suspenso";
}elseif($nota >= 5 && <6){
    echo "La nota $nota es un suficiente"
}elseif($nota >= 6 && <7){
    echo "La nota $nota es un bien";
}elseif($nota >= 7 && <9){
    echo "La nota $nota es un notable";
}elseif($nota >= 9 && <= 10){
    echo "La nota $nota es un sobresaliente";
}else{
    echo "La nota $nota no es válida";
}
?>