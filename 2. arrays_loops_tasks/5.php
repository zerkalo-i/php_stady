<?php
echo 'Дан массив $arr с ключами Коля, Вася, Петя с элементами 200, 300, 400. <br>
С помощью цикла foreach выведите на экран столбец строк такого формата: Коля — зарплата 200 долларов';

echo '<br>';
echo '<br>';

$arr = ['Коля' => 200, 'Вася' => 300, 'Петя' => 400];

foreach ($arr as $key => $value){
    echo $key .' - зарплата '.$value.' долларов. <br>';
}