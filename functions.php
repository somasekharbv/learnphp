<?php



function somar(){

    echo "iam some <br>";

}

function reddy(){

    return "google";
}

function varpass($a,$b){
    $c = $a + $b;
    $sub = $a - $b;
    $mul = $a * $b;
    $div = $a / $b;

    $str = "result for given values {$a} , {$b} <br>";
    $str .= "subtraction : {$sub} <br>";
    $str .= "addition value : {$mul} <br>";
    $str .= "division value: {$sub} <br>";
    return $str;
}


somar();

echo reddy()."<br>";


echo varpass(20,5);