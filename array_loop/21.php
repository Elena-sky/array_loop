<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 10.07.17
 * Time: 23:01
 *
 * 21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
рядов, а не 5.<br><br>
1<br>
22<br>
333<br>
4444<br>
55555
 *
 */

for ($n = 1; $n<=9 ;$n++) {
    $string = '';

    for ($i =0; $i<$n; $i++) {
        $string .= $n;
    }

    echo $string .'<br/>';
}