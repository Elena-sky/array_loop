<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 10.07.17
 * Time: 21:29
 *
 * 16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9
 *
 */

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $item) {
    if($item == 3 || $item == 6 || $item == 9) echo $item . '<br>';
    else
        echo "$item, ";

}
