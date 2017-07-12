<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 10.07.17
 * Time: 22:34
 *
 * 20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.<br><br>
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx<
 *
 */

$x = 'x';
$string = '';

for ($n = 0; $n<20 ;$n++) {
    $string .= $x;
    echo $string .'<br/>';
}
