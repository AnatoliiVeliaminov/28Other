<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
Напишите PHP-функцию, которая будет возвращать сумму всех элементов массива, массив может быть вложенным массивом.
(вложение может быть 2 или более), НЕ используйте стандартные функции PHP для работы с массивами.
Напишите функцию PHP, которая будет возвращать все пересекающиеся элементы двух массивов, НЕ используйте
стандартные функции PHP для работы с массивами.
5. Напишите функцию PHP, которая будет возвращать только «четные» элементы массива, НЕ используйте стандартный PHP
функции для работы с рабочими массивами.
*/

$array_one = array(1,2,3,4,5,6,7,8);
$array_two = array(1,2,3,9,5,6,-7,8);

function array_comparison(array $array1, array $array2)
{

foreach ($array1 as $item){
    foreach ($array2 as $item2){
       if ($item === $item2){
           $result_array[] = $item;
       }
    }
}
return $result_array;


}

echo print_r(array_comparison($array_one, $array_two)).'<br>';



function array_even_numbers(array $array1)
{

    foreach ($array1 as $item){
        if ($item % 2 === 0){
        $result_array[] = $item;
            }

    }
    return $result_array;


}

echo print_r(array_even_numbers($array_one));

$array_three = array(1,1,1,1);


function summa_elements_array(array $array)
{
    $result_summa = 0;
    foreach ($array as $item) {
        if (is_array($item)) {
            $result_summa += summa_elements_array($item);
            }
            $result_summa += $item;

        }

    return $result_summa;
}

echo '<br>'.summa_elements_array($array_three);