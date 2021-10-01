<?php
$arr = [
    [1, 2, 1, 0],
    [1, 0, 5, 3],
    [0, 3, 6, 8],
];
$sum = 0;
for ($j = 0; $j < count($arr[0]); $j++) {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i][$j] == 0) {
            break;
        }
        $sum += $arr[$i][$j];

    }
}
var_dump($sum);