<?php
echo 'Дан массив $arr. С помощью цикла foreach и переменной $count 
подсчитайте количество элементов этого массива. 
Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10.';

$arr = [];

foreach ($arr as $value){
    $count = count($value);
};


echo $count;
$arr = [4, 2, 5, 19, 13, 0, 10];