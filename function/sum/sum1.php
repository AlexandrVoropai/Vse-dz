<?php

echo "Enter!\n";
$handel = fopen ('php://stdin', 'r');
$op = function ($a,$b) {
return $a+$b;
};
echo $op(5,9);