<?php
function summa_arr($b) {
do{ 
$sum = 0;
$arrl = str_split($b);
for ($i=0; $i<count($arrl); $i++){
	$sum = $sum+$arrl[$i];
}
$b = $sum;
} while ($b>=10);
return $b;
} echo summa_arr(138);
