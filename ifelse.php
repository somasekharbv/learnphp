<?php



if($_GET){


$color = $_GET['color'];

$name = $_GET['name'];

if($color == "blue"){
    echo "you are crazy {$name}";
}
elseif($color == "white"){
    echo " you are  peace {$name}";
}elseif($color == "red"){
    echo "you are violent {$name}";
}else{

    echo "please choose red or blue or white.";
}


}else{

    echo "please pass request";
}