<?php
include('db.php');
session_start();
$userid=$_SESSION['user_id'];
$query="SELECT * FROM create_post WHERE user_id=$userid";
$result=mysqli_query($conn,$query);
$resultarr=mysqli_fetch_all($result,MYSQLI_ASSOC);
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
<div class="row mt-5">
    <div class="col-md-9 text-center">
        <h3 class="mb-3">My Creations</h3>
        <div class="row">
        <div class="row"> 
            <?php foreach($resultarr as $value){ 
               ?>              
            <div class="col-sm-6 offset-3 col-12 mb-4">
                <div class="card">
                    <img src="http://localhost/photogram.com/<?php echo $value['post'];?>">
                    <div class="card-body">
                        <?php echo $value['content'];?>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <div>
                                <i class="fa-solid fa-heart text-danger"></i> 8.5k
                            </div>
                            <div>
                                <i class="fa-solid fa-comment text-primary"></i> 18.5k
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div> 
            <?php
            } 
            ?>  
        </div>

        <!-- Load More -->
        <div class="row text-center mt-3">
            <div class="col-12">
                <button class="btn btn-dark"><i class="fa-solid fa-arrows-rotate"></i> Load More</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
            