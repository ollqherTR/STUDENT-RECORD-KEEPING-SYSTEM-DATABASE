<?php
$login=0;
$invalid = 0 ;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    
    $sql = "SELECT * FROM registration WHERE username='$username' AND password='$password'";
    $result =mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
           // echo "user already exist";
           $login=1;
           session_start();
           $_SESSION['username']=$username;
           header('location:yeni_kodlar/display.php'); 
        }else{  
                //echo " data inserted succesfully";
                $invalid =1;
           
        }
    }

}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <?php
  if($invalid){
        echo '<div class="alert alert-danger" role="alert">
        Error Invalid Information
      </div>';
    }

    ?>
    <?php
    if($login){
        echo '<div class="alert alert-success" role="alert">
        Succesfully loged in
      </div>';
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <h1 class ="text-center">Login page</h1>
<div class="container mt-5" >
<form action="login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Username" name ="username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter Your Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary w-100">Login</button>
</form>
</div>

</body>
</html>








    