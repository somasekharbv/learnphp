<?php

include(__DIR__.'/db.php');


$result = mysqli_query($conn,"SELECT * FROM sample");


while($row = mysqli_fetch_array($result)){

   echo "<p>{$row['id']}</p>";
   echo "<p>{$row['sname']}</p>";

}


// Free result set
mysqli_free_result($result);