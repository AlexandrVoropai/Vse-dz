<?php
$file = fopen ('myfile.txt', 'r');
$conect = fgets ($file);
fclose ($file);
echo $content;