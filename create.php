<?php
session_start();
include('db.php');
if(isset($_POST['submit'])){
  $cont=$_POST['content'];
  $user_id=$_SESSION['user_id'];
  $tmpImage=$_FILES['file']['tmp_name'];
  $img=$_FILES['file']['name'];
  if(move_uploaded_file($tmpImage,$img)){
    echo "image";
  }else{
    echo "img";
  }

 $query="INSERT INTO create_post(content,user_id,post)VALUES('$cont','$user_id','$img')";
 $result=mysqli_query($conn,$query);
 $affectedrows=mysqli_affected_rows($conn);
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar bg-dark border-bottom border-body"  data-bs-theme="dark" >
        <div class="container-fluid">
            <div class="collapse navbar-collapse offset-10">
            <span class="navbar-toggler-icon"></span>
            <ul class="navbar-nav"> 
                <li class="nav-item">
                <a class="nav-link" href="#">My creations</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Create</a>
                </li>  
            </ul>
            </div>
        </div>
        </nav>
        <?php include('nav.php');?>
    <form method="post" enctype="multipart/form-data">
        <div class="card mb-3 offset-3 mt-5" style="max-width: 700px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="IMG_4128.jpg" class="img-fluid rounded-start" alt="..." >
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <form method="form">
                        <input type="file" name="file"/>
                        <textarea name="content" class="form-control mt-3" class="mt-4"></textarea>
                        <div class="mt-3"><button name="submit" class="btn btn-dark ">create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </form>
</body>
</html>