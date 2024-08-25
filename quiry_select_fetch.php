<?php
include('db.php');

$query="SELECT * FROM users";
$result=mysqli_query($conn,$query);
$resultarr=mysqli_fetch_all ($result,MYSQLI_ASSOC);

// $quiry="INSERT INTO login_users(username,password) VALUES ('$user','$pass')";
//         echo $quiry;
//         $result=mysqli_query($conn,$quiry);
//         echo $result;
// 

 // $query="SELECT * FROM users WHERE username='$user' AND password='$pass'";
// $result=mysqli_query($conn,$query);
// $resultarr=mysqli_fetch_assoc($result);

//print_r($resultarr);

// foreach ($resultarr as $value ) {
//    echo "$value[full_name]</br>";
// } -->
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>making page of fetch data </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Mobile Number</th>
                <th>Username</th>
                <th>Time</th>
                <th>Password</th>
            </tr>
            <?php foreach($resultarr as $row ){   ?> 
                <tr>
                    <td><a href="user_detail.php?id=<?php echo $row['user_id']; ?>"><?php echo $row['user_id']; ?></a></td>
                    <td><?php echo $row['full_name']; ?></td>
                    <td><?php echo $row['mobile_number']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['password'];?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>