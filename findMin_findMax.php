<?php
function findMind($arr){
    $min = $arr[0];
    for ($i=1 ; $i<count($arr); $i++){
        if ($arr[$i] < $min){
          $min = $arr[$i];
        }
    }
    return "Min is ". $min ."<br>";
}

function findMax($arr){
    $max = $arr[0];
    for ($i=1 ; $i<count($arr); $i++){
        if ($arr[$i] > $max){
            $max = $arr[$i];
        }
    }
    return "Max is ". $max. "<br>";
}

 echo  findMax([1,2,3,4,57,8,9,-3]);
  echo findMind([3,5,6,-6,-8]);