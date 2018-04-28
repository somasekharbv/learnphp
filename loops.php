<?php


$data = [1,2,3,4,5];  

for($a = 2; $a < count($data); $a++){

    echo $data[$a]."<br>";

}


echo "<hr>";


$asscdata = [

    "name" => "soma",
    "age"  => 22,
    "height" => 5.2

];

//Foreach Loop

foreach($asscdata as $key => $val){

    echo "{$key} : {$val} <br>";

}


echo "<hr>";

$i = 0;

$a = true;

while($a){

    if($i == 1){
        echo "stopping loop";
        $a = false;
    }
    echo $data[$i];

    $i++;

}


echo "<hr>";

$x = 0;
do{
    
    echo $data[$x];
    $x = 2;
}
while($x < 2);