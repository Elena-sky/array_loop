<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 10.07.17
 * Time: 22:27
 *
 *19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
 *
 */


$weeks = array ('Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Вокресенье');

    $current_day  = date("w");
foreach($weeks as $day){
    if($day == $weeks[$current_day - 1]){
        echo "<b>" . $weeks[$current_day - 1] . "</b>";
    }
    else{
        echo $day;
    }
    echo '<br>';
}
echo '<br>';
