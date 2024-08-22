<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form of photogram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $num=$_POST['number'];
            $name=$_POST['name'];
            $user=$_POST['username'];
            $pass=$_POST['password'];
     
            // echo "$num </br>";
            // echo "$name </br>";
            // echo "$user </br>";
            // echo $pass;
            $query="INSERT INTO users (mobile_number,full_name,username,password) VALUES ('$num','$name','$user','$pass')";
            echo $query;
            $result=mysqli_query($conn,$query);
            echo $result;
        }
    ?>
    <div class="">
        <div class="text-center border mt-3  col-3 offset-4  d-flex flex-column ">
            <i class="fs-2 mt-4">instgram</i>
            <span class="mt-3">sign up to see photos and vedeos</span>
            <span>from your friends.</span>
            <form method="post">
                <input type="submit" class="  btn btn-primary mt-3" style="width:17rem;" value="log in with facebook" />
                <div class="d-flex ms-5">
                    <div class="border-top mt-4 me-4 ms-2" style="width:6rem;"></div>
                    <div class="mt-3">OR</div> 
                    <div class="border-top mt-3 mt-4 ms-4" style="width:6rem;"></div>
                </div>
                <input type="text" name="number" class=" form-control bg-light mt-3 ms-5 py-1 border-light-subtle" style="width:17rem;" placeholder="Phone number or email" />
                <input type="text" name="name" class=" form-control bg-light mt-2 ms-5 py-1 border-light-subtle" style="width:17rem;" placeholder="full name" />
                <input type="text" name="username" class=" form-control bg-light ms-5 mt-2 py-1 border-light-subtle" style="width:17rem;" placeholder="username" />
                <input type="text" name="password" class=" form-control bg-light ms-5 mt-2 py-1 border-light-subtle" style="width:17rem;" placeholder="password" />
                <input type="submit" name="submit" class=" form-control btn btn-primary mt-4 ms- mb-5 me-3 border-light-subtle" style="width:17rem;" value="sign up" />
            </form>
        </div>
        <div class="border  mt-3 col-3 offset-4 d-flex" >
            <div class="col-8 offset-3 mt-3 mb-3">
                <span>Have an account?</span>
                <span class="text-primary">log in</span>
            </div>
        </div>
    </div>
</body>
</html>