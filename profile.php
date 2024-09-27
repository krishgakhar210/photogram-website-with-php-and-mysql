
<?php
include ('db.php');
$id=$_GET['id'];
$query="SELECT * FROM user1 WHERE user_id='$id'";
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
<div class="  ms-4 border-end position-fixed" style="width:15rem; height:45rem;">
            <i class="fs-4   ">photogram </i>
            <div class="d-flex mt-5">
            <i class="fa-solid fa-house text-dark fs-5"></i>             
               <h6 class="ms-3"><a class="text-decoration-none text-dark" class href="">Home </a></h6>
            </div>
            <div class="d-flex mt-4">
                <i class="fa-solid fa-magnifying-glass text-dark fs-5 mt-1"></i>
                <span class="ms-3"><a class="text-decoration-none text-dark" href="">Search </a></span>
            </div>
            <div class="d-flex mt-4">
                <i class="fa-brands fa-internet-explorer text-dark fs-5 mt-1"></i>
                <span class="ms-3"><a class="text-decoration-none text-dark" href="">Explore </a></span>
            </div>
            <div class="d-flex mt-4">
                <i class="fa-solid fa-circle-play text-dark fs-5 mt-1"></i>
                <span class="ms-3"><a class="text-decoration-none text-dark" href="">Reels </a></span>
            </div>
            <div class="d-flex mt-4">
                <i class="fa-brands fa-facebook-messenger text-dark fs-5 mt-1"></i>
                <span class="ms-3"><a class="text-decoration-none text-dark" href="">Messages </a></span>
            </div>
            <div class="d-flex mt-4">
                 <i class="fa-regular fa-heart fs-5 mt-1 text-dark"></i>
                <span class="ms-3"><a class="text-decoration-none text-dark" href="">Notifications </a></span>
            </div>
            <div class="d-flex mt-4">
                <i class="fa-solid fa-plus border text-dark"></i>
                <span class="ms-3"><a class="text-decoration-none text-dark" href="">Crete </a></span>
            </div>
            <div class="d-flex mt-4">
            <img class=" rounded-circle border border-danger" src="IMG_4128.jpg" width="30" height="30"/>
                <span class="ms-3"><a class="text-decoration-none text-dark" href="">Profile </a></span>
            </div>
            <div class="mt-5 d-flex">
                <i class="fa-brands fa-threads fs-5 mt-4 text-dark"></i>
                <span class="ms-3 mt-4"><a class="text-decoration-none text-dark" href="">Threads </a></span>
            </div>
            <div class="mt-5 d-flex">
                <i class="fa-solid fa-grip-lines fs-5 text-dark"></i>
                <span class="ms-3 me-2"><a class="text-decoration-none text-dark" href="">More </a></span>
            </div>
        </div>
    <div class="row mt-5">
        <div class="col-2 offset-4">
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
        <div class="col-8 offset-4 ">
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
      <div class="col-8 offset-3 mt-5">
       <hr/>
    </div>
    <div class="d-flex col-4 justify-content-between offset-5">
        
        <div class="    ">
            <i class="fa-solid fa-signs-post"></i>
            <a class="text-dark text-decoration-none" href=""><span>POSTS</span></a>
        </div>
        <div class=" ">
            <i class="fa-solid fa-video"></i>
            <a class="text-dark text-decoration-none" href=""><span>POSTS</span></a>
        </div>
        <div class=" ">
            <i class="fa-regular fa-bookmark"></i>
            <a class="text-dark text-decoration-none" href=""><span>SAVED</span></a>
        </div>
        <div class=" ">
            <i class="fa-solid fa-tag"></i>
            <a class="text-dark text-decoration-none" href=""><span>TAGGED</span></a>
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <div class="d-flex">
                <div class="d-flex">
                <img class="ms-4 rounded-circle border border-danger" src="IMG_4128.jpg" width="70" height="70"/>

                </div>
            </div>
        </div>
    </div>
</body>
</html>