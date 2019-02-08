<?php
echo "Enter any number\n";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);
function prooh($number){
for ($i = 1; $i <= $number; $i++){
echo $i;}}
echo prooh($number);
?>
