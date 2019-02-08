<?php
//Массив
$test = array (5.2,5.3,5.4);
 
function summ_array ($array){
    //Проверям на массив
    if (is_array($array)){
        $sum = 0;
        //Используем цикл, для суммирования
        foreach ($array as $key =>$value){
            $sum = $sum+$value;
        }
        //Возвращаем сумму.
        return $sum;
 
    }
    return'Это не массив!';
}
 
print summ_array($test);