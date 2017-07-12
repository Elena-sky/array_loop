<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 11.07.17
 * Time: 00:41
 *
 * 25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.</p>
 *
 */
$arr = [];

for ($i=0 ; $i<10 ; $i++) {
    $rand = random_int(1, 100);

    $arr[$i]= $rand;

}

$max = [
    'key' => 0,
    'value' => $arr[0]
];
$min = [
    'key' => 0,
    'value' => $arr[0]
];

foreach ($arr as $key => $value) {
    if ($value > $max['value']) {
        $max = [
            'key' => $key,
            'value' => $value
        ];
    }
    if ($value < $min['value']) {
        $min = [
            'key' => $key,
            'value' => $value
        ];
    }
}
$res = $arr;
$res[$min['key']] = $max['value'];
$res[$max['key']] = $min['value'];
/*$maxVal = max($arr);
$minVal = min($arr);
$maxKey = array_search($maxVal, $arr);
$minKey = array_search($minVal, $arr);*/

var_dump($arr);
var_dump($res);

