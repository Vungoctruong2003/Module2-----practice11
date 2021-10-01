<?php
function countNum($arr, $num)
{
    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $num) {
            $count++;
        }
    }
    return "so lan xuat hien cua so da cho la: " . $count;
}

echo countNum([1,2,4,5,3,4,4,3],4);
