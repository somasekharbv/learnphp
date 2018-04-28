<?php
if(isset($_GET['name'])){

    $name = $_GET['name'];
}

//$c = 20;
function addition($a, $b,$c = NULL){
 //   $c = $a +$b;
    return $c;
}

function sub($a, $b){
    return $a - $b;
}
function multi($a, $b){
    $c = $a * $b;
    $d = $c * $b;
    return $d;
}
function squre($a){
    $c = $a * $a;
    return $c;
}

function expon($a,$b){

    return $a ** $b;
}

function arrayaddone($pp,$num){
        $dum = array();

        foreach($pp as $val){

            $d = $val + $num;

            array_push($dum,$d);
        }

        return $dum;
}


function addhello($hum){
        return "hello {$hum}";

}
$aa = [1,2,3,4,5];

$gg = ["example.com","fb.com","red.com"];

echo addition(20,20)."<br/>";
echo sub(20,20)."<br/>";
echo multi(20,20)."<br/>";
echo squre(20,20)."<br/>";
print_r(arrayaddone($aa,1));
echo "<br>";

if(!empty($name)){
    echo addhello($name);

}

