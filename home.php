<?php
include('db.php');
session_start();
// if(!isset($_SESSION['username'])){
//     header("location:login.php");
// }
$currentUsername=$_SESSION['username'];
$query="SELECT * FROM users WHERE username!='$currentUsername'";
$result=mysqli_query($conn,$query);
$resultarr=mysqli_fetch_all($result,MYSQLI_ASSOC);

// Fetch current user data

$query1="SELECT * FROM users WHERE username =   '$currentUsername'";
$result1=mysqli_query($conn,$query1);
$resultarr1=mysqli_fetch_assoc($result1);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page of photogram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="home.css" rel="stylesheet" />
</head> 
<body class="body">
    <div class="d-flex">
        <div class=" mt-4 ms-4 border-end position-fixed" style="width:15rem; height:45rem;">
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
        <div id="mid" class="mt-5 ">
            <div class="d-flex ms-5">
                <img class="ms-4 rounded-circle border border-danger" src="IMG_4128.jpg" width="60" height="60"/>
                <img class="ms-4 rounded-circle border border-danger" src="IMG_4128.jpg" width="60" height="60"/>
                <img class="ms-4 rounded-circle border border-danger" src="IMG_4128.jpg" width="60" height="60"/>
                <img class="ms-4 rounded-circle border border-danger" src="IMG_4128.jpg" width="60" height="60"/>
                <img class="ms-4 rounded-circle border border-danger" src="IMG_4128.jpg" width="60" height="60"/>
                <img class="ms-4 rounded-circle border border-danger" src="IMG_4128.jpg" width="60" height="60"/>
                <img class="ms-4 rounded-circle border border-danger" src="IMG_4128.jpg" width="60" height="60"/>
            </div>
            <div class=" mt-4 row" >
                <div class="d-flex col-9  offset-1 ">
                  <img class="ms-4 rounded-circle border" src="IMG_4128.jpg" width="50" height="50"/>
                    <div class="ms-2" style="height:1rem;">
                        <h6 class="mt-1"><?php print_r($resultarr1['username']);?><h6>
                        <span id="audio" class="">original audio</span>
                    </div>
                    <span class="ms-1">. 7h</span>
                    <div class="col-4">
                       <span class="float-end fs-3">...</span>
                    </div>
                </div>
                <div class=" col-9 offset-1  mt-3">
                  <img id="img"  class="text-center ms-4" src="IMG_4128.jpg" />
                </div> 
                <div class=" col-9  offset-1 mt-3">
                  <img id="img"  class="text-center ms-4" src="IMG_4128.jpg" />
                </div> 
                 
            </div>
        </div>
        <div class="col-2 end  " style="width:18rem;">
            <div class="d-flex mt-4">
                <img class=" rounded-circle border" src="IMG_4128.jpg" width="50" height="50"/>
                <div class="">
                    <h6 class="ms-2"><?php print_r($resultarr1['username']);?></h6>
                    <span class="ms-2 little "><?php print_r($resultarr1['full_name']);?></span>
                </div>
                <div  class="ms-5"><span class="ms-4 text-primary">Switch</span></div>
            </div>
            <div class="d-flex justify-content-between mt-4">
                <span id="suggest">Suggested for you</span>
                <p id="see">See all</p>
            </div>
            <?php foreach($resultarr as $username ){   ?>
            <div class="d-flex mt-3">
              
                <img class=" rounded-circle border" src="IMG_4128.jpg" width="50" height="50"/>
                <div class="">
                    <h6 class="ms-2"><a class="text-decoration-none text-dark" href="profile.php?id=<?php echo $username['user_id']; ?>"> <?php echo $username['username'];  ?></h6>
                    <span class="ms-2 little "><?php echo $username['mobile_number'];  ?></span>
                </div>
                <div  class="ms-5"><span class="ms-5 text-primary">Follow</span></div>
            </div>
            <?php }?>
        </div>

    </div>
</body>
</html>