<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice of login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $user=$_POST['username'];
            $pass=$_POST['password'];

            $query="SELECT * FROM user1 WHERE username='$user' AND password='$pass'";
            $result=mysqli_query($conn,$query);
            $resultarr=mysqli_fetch_assoc($result);
           if($resultarr!=null && count($resultarr)>0){
                echo 'data found';
            }else{
                echo 'username inavalid';
            }
        }
    ?>
    <div class="container">
        <div class="col-3 offset-3">
            <form method="post" class="mt-5">
                <input type="text" name="username" placeholder="username" class="form-control mt-3" />
                <input type="password" name="password" placeholder="password" class="form-control mt-3 " />
                <button name="submit" class="btn btn-primary mt-3">submit</button>
            </form>
        </div>
    </div>
</body>
</html>