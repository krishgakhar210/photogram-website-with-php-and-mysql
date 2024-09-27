<?php
session_start();
include('db.php');
$currentuser=$_SESSION['user_id'];
$fullname=$_SESSION['full_name'];

if(isset($_POST['submit'])){
    $bio=$_POST['bio'];
    $tmpimage=$_FILES['file']['tmp_name'];
    $img=$_FILES['file']['name'];
    if($img!=''){
        move_uploaded_file($tmpimage, $img);
        echo " uploaded";
    }else{
        echo "not uploaded";
    }
    $interest=$_POST['interest'];

    $query="UPDATE users SET image='$img',bio='$bio' interested_in='$interest' WHERE user_id='$currentuser'";
    $result=mysqli_query($conn,$query);
	$affectedRows=mysqli_affected_rows($conn);
}
    $query1="SELECT * FROM users WHERE user_id=$currentuser";
    $result1=mysqli_query($conn,$query1);
    $resultarr=mysqli_num_rows($result1);
    $userexist=false;
    if($resultarr>0){
        $userexist=true;
        $data=mysqli_fetch_assoc($result1);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<nav class="navbar  navbar-expand-lg navbar bg-dark border-bottom border-body"  data-bs-theme="dark" >
        <div class="container-fluid">
            <div class="collapse navbar-collapse offset-10">
            <span class="navbar-toggler-icon"></span>
            <ul class="navbar-nav"> 
                <li class="nav-item">
                <a class="nav-link" href="#">My creations</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="create.php">Create</a>
                </li>  
            </ul>
            </div>
        </div>
    </nav>   
    <?php include('nav.php');?>
<section class="container my-4 offset-3">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <?php if(isset($affectedRows)){
                    if($affectedRows>0){
                        $_SESSION['bio']=$data['bio'];
                        echo '<p class="alert alert-success">updated successfully</p>';
                    }else{
                        echo '<p class="alert alert-danged">something went wrong</p>';

                    }
                }?>
                <h4 class="card-header">Update Profile</h4>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label for="photoVideos" class="col-sm-3 col-form-label">
                            Full name</label>
                            <div class="col-sm-9">
                                <label for="photoVideos" class="col-sm-3 col-form-label"><?php echo $data['full_name'];?></label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="photoVideos" class="col-sm-3 col-form-label">Mobile Number</label>
                            <div class="col-sm-9">
                                <label for="photoVideos" class="col-sm-3 col-form-label"><?php echo $data['mobile'];?></label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="photoVideos" class="col-sm-3 col-form-label">Change Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="file" class="form-control" id="photoVideos">
                                <?php if($userexist==true){
                                        echo '<img src="'.$data['image'].'" width="150" class="border mt-2" />';
                                }?>
                                        </div>
                        </div>
                        <div class="row mb-3">
                            <label for="content" class="col-sm-3 col-form-label">Bio</label>
                            <div class="col-sm-9">
                                <textarea rows="8" name="bio" class="form-control" id="content">
                                    <?php if($userexist==true){
                                        echo $data['bio'];
                                    }?>
                                </textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="interestedIn" class="col-sm-3 col-form-label">Interested</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="interestedIn" name="interest">
                                    <option value="animals"value="animals" <?php if ($userexist==true && $data['interested_in']=='animal'){echo 'selected';}?>>Animals</option>>Animals</option>
                                    <option value="nature"value="nature" <?php if ($userexist==true && $data['interested_in']=='Nature'){echo 'selected';}?>>Nature</option>>Nature</option> >Nature</option>
                                    <option value="sports"value="sports" <?php if ($userexist==true && $data['interested_in']=='sports'){echo 'sports';}?>>sports</option>>Animals</option>>Sports</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-4">
                            <input type="submit" name="submit" class="btn btn-dark" value="Save" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

