<?php

$file = fopen ('myfile.txt', 'r');
$conect = fgets ($file);
fclose ($file);
echo $content;
/*
$fileInner = fopen('inner_folder/file', 'r');
$content = fgets ($fileInner);
echo $content;
*/

/*
$content = fgets ($fileInner);
echo $content;
*/

/*
$a =1;
while ($a ==1){
	echo 'a';
}
*/
// feof возвращает, дщстигнут ли конец файла
/*while (!feof($fileInner)) {
	$conect = fgets ($fileInner);
	*/

