<?php
/**
 *  Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива.
 * Результат запишите переменную $result.
 * Чтобы убедиться в правильности расчета, реализован также вывод квадратов.
 */

$arr=[26, 17, 136, 12, 79, 15];
$result = 0;


    foreach ($arr as $el){
        $el *= $el;
        echo $el.'<br>';
        $result += $el;
    }

echo 'Сумма квадратов элементов массива - '.$result;