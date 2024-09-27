<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch all data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>making registration form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body>
        <?php
           
            
            if(isset($_POST['submit'])){
                $full=$_POST['fname'];
                $num=$_POST['number'];
                $user=$_POST['username'];
                $pass=$_POST['password'];
                
                $query="INSERT INTO user1(full_name,username,mobile_number,password) VALUES ('$full','$user','$num','$pass')";
                $result=mysqli_query($conn,$query);
                
            }
        ?>
        <div class="row">
            <div class="col-2 offset-5">
                <form method="post" class="mt-5">
                    <label>full name</label><input type="text" name="fname" class="form-control"/>
                    <label class="mt-3" >username</label><input type="text" name="username" class="form-control"/>
                    <label class="mt-3">Mobile number</label><input type="number" name="number" class="form-control"/>
                    <label class="mt-3">password</label><input type="password" name="password" class="form-control"/>
                    <button name="submit" class="btn btn-primary mt-3">submit</button>
                </form>
            </div>
        </div>
    </body>
    </html>
</body>
</html>