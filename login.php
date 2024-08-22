<?php include('db.php'); 
session_start();
?>
<?php
if(isset($_SESSION['username']) && $_SESSION['username']!=''){
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page of photogram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="login.css" rel="stylesheet" />

</head>
<body>
   
    <div>
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-9 " style="width:27rem;">
                <img id="img1" src="inst.jpg" width="280"/>
                <img id="img" src="insta.png" width="280"  />
            </div>
                <div class="col-3" style="width:22rem;">
                    <div class="border py-1 px-1">
                        <form method="post">
                            <i class="fs-2 heading">photogram</i>
                            <input  type="text" name="username" class="ms-4 me-4 form-control bg-light mt-5  border-light-subtle"  placeholder="Phone number,Username or email" style="width:17rem;"/>
                            <input  type="password" name="password" class="ms-4 me-4 form-control bg-light mt-3  border-light-subtle"  placeholder="password" style="width:17rem;"/>
                            <input type="submit" name="submit" class="btn btn-primary mt-3 ms-4" style="width:17rem;" value="log in" />
                            <?php
                                if(isset($_POST['submit'])){
                                    $user=$_POST['username'];
                                    $pass=$_POST['password'];
                            
                                $query="SELECT * FROM users WHERE username='$user' AND password='$pass'";
                                $result=mysqli_query($conn,$query);
                                $resultarr=mysqli_fetch_assoc($result);
                                if($resultarr!=null && count($resultarr)>0){
                                    echo 'data found';
                                    $_SESSION['username']=$user;
                                    header("location:home.php");
                                }else{
                                    echo '<p class="text-danger text-center mt-1">Username/password Invalid!!</p>';
                                }
                                }
                            ?>
                            <div class="d-flex ms-3 mt-3">
                                <div class=" border-top mt-3 me-4 ms-3"style="width:6rem;"></div>
                                <div class="mt-2"> <span>OR</span></div>
                                <div class=" border-top  mt-3 ms-4"style="width:6rem;"></div>
                            </div>
                            <div class="d-flex col-8  offset-3  mt-4">
                                <i class="fa-brands fa-square-facebook text-primary fs-4"></i>
                                <span id="sp" class="ms-2 text-primary ">Log in with facebook</span>
                            </div>
                            <div class=" mt-3 ">
                                <span id="sp1" class="col-4 offset-4 ">Forgot password?</span>
                            </div>
                        </form>
                    </div>
                    <div id="footer" class="border ms-1" style="width:20rem; height:4rem">
                    <div class="mt-3 ms-4">
                        <span class="">Don't have an account?</span>
                        <span class="text-primary mt-2"><a class="text-decoration-none" href="register.php">Sign up</a></span>
                    </div>  
                </div>
                </div>
                
            </div>
           
        </div>
    </div>
</body>
</html>