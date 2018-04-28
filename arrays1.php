<?php

$gender = ["male","female","other"];
$age= [12,13,14,15,16];

echo "type of gender",": ".$gender[1]."<br/>","the age of the gender",": ".$age[2]; // associate array

echo "<hr>";

$myroom = [["first floor", "second floor"],["washroom", "bedroom"],["room1","room 2"]

];
echo "Floor No: {$myroom[0][0]}: {$myroom[1][0]}, {$myroom[1][1]} <br/>";
echo "Floor No: {$myroom[0][1]}: {$myroom[2][0]}, {$myroom[2][1]}";

echo "<hr>";

$food = [   // associate array
    "type" => "good",
    "quality" => "normal",
    "place" => "awesome",
    "visitors" => 100,
    "review by all" => "100%"
];


foreach($food as $key => $val){

    echo "{$key} : {$val} <br/>";    
}
?>

