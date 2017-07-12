<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 10.07.17
 * Time: 22:15
 */

$months = array("Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь");
$current_month = date("n");
foreach($months as $month){
    if($month == $months[$current_month - 1]){
        echo "<b>" . $months[$current_month - 1] . "</b>";
    }
    else{
        echo $month;
    }
    echo '<br>';
}
echo '<br>';

