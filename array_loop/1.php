<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 09.07.17
 * Time: 23:26
 * <p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.</p>
 *
 */

$massiv=array('html', 'css', 'php', 'js', 'jq');

foreach ($massiv as $value) {
    echo $value.'<br/>';
}

