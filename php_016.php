<?php
//CADENAS. Su posición inicial es 0
//FUNCIONES:
//strlen(): Devuelve la posición de una cadena
//strtolower(): Convierte toda la cadena a minúsculas
//strtoupper(): Convierte toda la cadena a mayúsculas
//strcmp(): Compara dos cadenas (sensible a mayúsculas y minúsculas.) Devuelve 0 si son iguales
//strcasecmp(): Compara dos cadenas (insensible a mayúsculas y minúsculas.) Devuelve 0 si ason iguales
//substr(): Extraer una parte de la cadena
//str_repeat(): Repite una cadena el número de veces que se expecifican
//trim(): Eliminar los espacios en blanco al principio y al final de una cadena.
//str_word_count(): Cuenta las palabras
//strreverse(): Invierte la cadena
//strpos(): Busca un texto dentro de una cadena y devuelve su posición
//str_replace(): Reemplaza unos caracteres por otros.

//Asignar "Hola mundo!" a una variable
$texto = "Hola mundo!";

//Contar el número de palabras
echo "Número de palabra de $texto: ".str_word_count($texto). "<br>";

//Invertir la cadena
echo "Cadena invertida: ". strrev($texto). "<br>";

//Buscar el texto "Mundo" dentro de la cadena
echo "Posición de 'Mundo' :". strpos($texto,"Mundo"). "<br>";

//Reemplazar Mundo por Dolly
echo "Reemplazo de' Mundo 'por 'Dolly': ".str_replace("Mundo","Dolly",$texto)."<br>";

//Longitud de una cadena
echo "Longitud de la cadena '$texto':". strlen($texto) . "<br>";

//pasar a minusculas
echo "Cadena en minúsculas: ". strtolower($texto). "<br>";

//pasar a mayúsculas
echo "Cadena en minúsculas: ". strtoupper($texto). "<br>";

//Comparar cadenas sensibles mayúsculas y minúsculas
echo "Comparación de 'Hola' y 'hola': ". strcmp("Hola","hola"). "<br>";

//Comparar cadenas insensibles mayúsculas y minúsculas
echo "Comparación de 'Hola' y 'hola': ". strcasecmp("Hola","hola"). "<br>";

//Extraer cinco caracteres a partir del carácter 5
echo "Subcadenas de '$texto'.". substr($texto, 5 , 3). "<br>";
echo "Subcadena de '$texto' a partir del quinto carácter: ". substr($texto,5,3)."<br>";

//Repetir una cadena
echo "Repetir 'Hola' tres veces: ". str_repeat("Hola",3)."<br>";

//Eliminar espacios en blanco
echo "Cadena con espacios eliminados: " . trim("1       $texto    2"). "<br>";

?>