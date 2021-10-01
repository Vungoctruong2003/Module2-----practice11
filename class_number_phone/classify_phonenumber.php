<?php


function get3num($num){
    $str = substr($num,0,3);
    $num3 = (int)$str;
    return $num3;
}

function classifyPhoneNumber($num){
    $viettel = array();
    $mobi = array();
    $vina = array();
    $numNew = get3num($num);
    if ($numNew>=32 and $numNew<= 39){
        array_push(  $viettel,$num);
    }if ($numNew>=70 and $numNew<= 78){
        array_push($mobi,$num);
    }if ($numNew>=81 and $numNew<= 85){
        array_push($vina,$num);
    }
    for ($i=0; $i<count($viettel); $i++){
        echo "viettel: ";
        echo $viettel[$i];
        echo "<br>";
    }

    for ($i=0; $i<count($mobi); $i++){
        echo "mobi: ";
        echo $mobi[$i];
        echo "<br>";
    }
    for ($i=0; $i<count($vina); $i++){
        echo "vina: ";
        echo $vina[$i];
        echo "<br>";
    }
}


