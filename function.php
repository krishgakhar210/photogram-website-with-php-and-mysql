<?php
$servername="localhost";
$username="root";
$password="";
$database="photogram";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo mysqli_error($conn);
}

// insert data in database
function insert($table,$data_array,$file_array){
    global $conn;
    $full_name=$data_array['full_name'];
    $mobile=$data_array['mobile'];
    $password=sha1 ($data_array['password']);
    $interested=$data_array['interested'];

    $tmpimage=$file_array['image']['tmp_name'];
    $image=$file_array['image']['name'];

    if(!move_uploaded_file($tmpimage,$image)){
        print_r('not uploaded');
    die;
    }

    $query="INSERT INTO $table (full_name,mobile,password,interested,image) VALUES ('$full_name','$mobile','$password','$interested','$image')";
    $result=mysqli_query($conn,$query);
    $affectedrows=mysqli_affected_rows($conn);
    if($affectedrows>0){
        return true;
    }else{
        return false;
    }
} 
?>