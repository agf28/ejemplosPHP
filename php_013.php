<?php
$var1 = 4;
if (isset($var1)){
    print("la varieble var1 está configurada y vale: ".$var1);
}else {
    print("la varieble var1 no está configurada");
}

unset($var1);
echo '<br>';
if (isset($var1)) {
    print("la varieble var1 está configurada y vale: ".$var1);
}else {
    print("la varieble var1 no está configurada");
}
?>