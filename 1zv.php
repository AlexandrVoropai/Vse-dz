<?php

$height = 7;
for($y=1; $y<=$height; $y++){
    echo str_repeat(' ',$height-$y);
    echo str_repeat('*',$y*2-1)." \n";  
}
for($y=$height; $y>0; $y--){
    echo str_repeat(' ',$height-$y);
    echo str_repeat('*',$y*2-1)." \n";  
}
?>
	