<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 10.07.17
 * Time: 22:18
 *
 * 18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.
 *
 */

$weeks = array ('Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Вокресенье');
foreach ($weeks as $value){

    if($value == 'Суббота'|| $value == 'Вокресенье'){
        echo '<b>' . $value . '</b>'.' <br/> ';
    }
    else echo $value .' <br/> ';
}


//
//     ИЛИ
//
//
//$weeks = array ('Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Вокресенье');
//foreach ($weeks as $day){
//
//    if($day == $weeks[5] || $day == $weeks[6]){
//        echo '<b>' . $day . '</b>'.' <br/> ';
//    }
//    else echo $day .' <br/> ';
//}
