<?php

//This is called single line Comment

/*
This program is designed for soma

and co


*/

$data = [1,2,3,4,5];    //php arrays


$mdata = ["google","amazon","soma","reddy"];

$mixeddata = [1,2,"google",'interent'];

echo $mixeddata[3]."<br>";


//Associative Array
$asscdata = [

    "name" => "soma",
    "age"  => 22,
    "height" => 5.2

];


echo "Name:{$asscdata['name']} <br>";
echo "height: {$asscdata['height']} <br>";



echo "Multi dimensional ARRAY  <br>";
//Multi Dimensional Array


$multidata = [
    [1,2,3,4,5],
    ["soma","doma","roma"]
];


echo $multidata[1][1];





?>