<?php
$quiry="INSERT INTO login_users(username,password) VALUES ('$user','$pass')";
        echo $quiry;
        $result=mysqli_query($conn,$quiry);
        echo $result;
?>