<?php
# Количество этажей
$level_count = 9;
 
# Количечтво квартир на этаже
$rooms_on_level = 4;
 
# Количество квартир в подъезде
$rooms = $level_count * $rooms_on_level;
 
# Номер искомой квартиры
$room_number = 55;
 
# Номер подъезда
$access = ceil($room_number / $rooms);
 
# Номер этажа
// $level = ceil(($rooms + $room_number - $access * $rooms) / $rooms_on_level);
$level = $room_number % $rooms ? ceil($room_number % $rooms / $rooms_on_level) : $level_count;
 
# Вывод
echo $access . ' ' . $level;