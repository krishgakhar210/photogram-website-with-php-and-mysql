<?php
 include('db.php');
 $query= "SELECT * from user";
 $result=mysqli_query($conn,$query);
 $resultarr=mysqli_fetch_all($result,MYSQLI_ASSOC);
//  print_r($resultarr);
foreach($resultarr as $row ){
    echo $row['password']."</br>";
}
?>