<?php

include(__DIR__.'\db.php');

if(isset($_POST['myname'])){

    $name = $_POST['myname'];

    mysqli_query($conn,"INSERT INTO sample (id,sname) VALUES (NULL,'$name')");
    
    echo "Inserted Successfully";


    mysqli_close($conn);

}else{

  echo "please use our form to fill data..";

}



?>
