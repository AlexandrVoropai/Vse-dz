<?php
// каждый раз перезаписывает файл
/*$file = fopen ('file_write.txt', 'w');
fputs ($file, 'Text from PHP');
// добавляет в файл 
*/
$file = fopen ('file_write.txt', 'a');
fputs($file, "Text from PHP\r\n");
