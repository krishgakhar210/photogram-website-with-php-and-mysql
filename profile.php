
<?php
include ('db.php');

$id=$_GET['id'];

$query="SELECT * FROM users WHERE user_id='$id'";
$result=mysqli_query($conn,$query);
$resultarr=mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
    <div class="row mt-5">
        <div class="col-2 offset-3">
           <img src="IMG_4128.jpg" class="rounded-circle" width="150" height="150"/>
        </div>
        <div class="col-4">
            <div class="d-flex">
                <h5 class="mt-2"><?php print_r($resultarr['username']);?></h5>
                <button class="btn bg-secondary-subtle ms-3">Edit profile</button>
                <button class="btn bg-secondary-subtle ms-2">View archive</button>
                <i class="fa-solid fa-gear ms-2 fs-4 mt-2"></i>
            </div>
            <div class="d-flex mt-4">
                <span>21 posts</span>
                <span class="ms-5">561 followers</span>
                <span class="ms-5">180 following</span>
            </div>
            <h5 class="mt-4"><?php print_r($resultarr['full_name']);?></h5>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8 offset-3">
            <div class="d-flex">
                <img class="ms-4 rounded-circle border border-danger" src="IMG_4128.jpg" width="70" height="70"/>
                <img class="ms-5 rounded-circle border border-danger" src="IMG_4128.jpg" width="70" height="70"/>
                <img class="ms-5 rounded-circle border border-danger" src="IMG_4128.jpg" width="70" height="70"/>
                <img class="ms-5 rounded-circle border border-danger" src="IMG_4128.jpg" width="70" height="70"/>
                <img class="ms-5 rounded-circle border border-danger" src="IMG_4128.jpg" width="70" height="70"/>
                <img class="ms-5 rounded-circle border border-danger" src="IMG_4128.jpg" width="70" height="70"/>
            </div>
        </div>
    </div>
      <div class="col-8 offset-2 mt-5">
       <hr/>
    </div>
</body>
</html>