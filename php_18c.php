<?php
$a = 20;
$b = 20;

if($a > $b){
    print ("A es mayor que B".$a);
}else{
    if ($a < $b) {
        print ("B es mayor a A y vale".$b);
    }
        print ("A y B son iguales, y su valor es ". $b);
}

//con else if
if ($a > $b){
    print ("A es mayor que B y vale. ".$a);
}elseif($a <$b){
    print ("B es mayor que B y vale. ".$b);
}else{
    print ("A y B son iguales, y su valor: ".$b);
}


?>