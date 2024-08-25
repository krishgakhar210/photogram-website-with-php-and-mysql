<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username']==''){
    header("location:practice.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
<div class="col-3 ms-5 mt-5">
        <form method="post">
        <div class="mb-3 ">
            <label for="exampleInputtext" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" >
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" >
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    
</body>
</html>