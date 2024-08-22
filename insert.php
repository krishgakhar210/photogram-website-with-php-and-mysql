<?php
$servername='localhost';
$username='root';
$passsword='';
$database='photogram';

$conn= mysqli_connect($servername,$username,$passsword,$database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $user=$_POST['username'];
            $pass=$_POST['password'];
            $query="INSERT INTO user(username,password)VALUE('$user','$pass')";
            echo $query;
            $result=mysqli_query($conn,$query);
            echo $result;
        }
    ?>

    <div class="container col-2 mt-5">
        <form class="form" method="post">
            <input type="text" name="username" class="form-control" placeholder="Username" >
            <input type="text" name="password" class="form-control mt-3" placeholder="password">
            <input type="submit" name="submit"class="btn btn-primary mt-3"/>
        </form>
    </div>
</body>
</html>