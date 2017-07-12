<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 10.07.17
 * Time: 23:47
 *
 * 22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx
 *
 */

$x = 'x';
$string = '';

for ($n = 0; $n<5 ;$n++) {
    $string .= $x;
    echo $string .$string .'<br/>';
}