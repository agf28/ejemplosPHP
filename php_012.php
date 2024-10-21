<?php
//función isset
//Comprueba si una variable esta configurada, es decir, está declarada y no es NULL.En este caso devuelve 1
//En caso contrario devuelve 0.
$var1 = 4;
if(isset($var)){
    print("La variable var1 esta inicializada y no es NULL. Su valor es :".$var1);
}else{
    print("la varieble var1 no esta inicializada");
}
?>