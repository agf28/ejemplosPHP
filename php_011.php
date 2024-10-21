<?php
$var = 7.6;
print($var);
echo '<br>';
print(gettype($var));
echo '<br>';
settype($var, "integer");
print(gettype($var))
?>