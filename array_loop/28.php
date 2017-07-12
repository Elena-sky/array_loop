<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 12.07.17
 * Time: 18:58
 *
 * 28. Вывести таблицу умножения с помощью двух циклов for.
 *
 */
$res =0;

for ($i = 1; $i <=10; $i++) {
    for ($n=1; $n<=10; $n++) {
        $res = $i * $n;
        echo $i .'*' .$n ."=" .$res .'<br/>';
    }
    echo '<br/>';

}