<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password= $_POST['password'];
    $field= $_POST['field'];
    $marks= $_POST['marks'];
    $fee= $_POST['fee'];
    $scholarship= $_POST['scholarship'];
  

    $sql="INSERT INTO crud (name,surname,email,password,field,marks,fee,scholarship) VALUES('$name','$surname','$email','$password','$field','$marks','$fee','$scholarship')";
    $result= mysqli_query($con,$sql);
    if($result){
       // echo "data inserted succesfully";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }


}


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label f class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label f class="form-label">Surname</label>
                <input type="text" class="form-control" placeholder="Enter Your Surname" name="surname" autocomplete="off">
            </div>
            <div class="mb-3">
                <label f class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label f class="form-label">Password</label>
                <input type="text" class="form-control" placeholder="Enter Your Password" name="password" autocomplete="off">
            </div>
            <div class="mb-3">
                <label f class="form-label">Field</label>
                <input type="text" class="form-control" placeholder="Enter Your Field" name="field" autocomplete="off">
            </div>
            <div class="mb-3">
                <label f class="form-label">Marks</label>
                <input type="text" class="form-control" placeholder="Enter Your Mark" name="marks" autocomplete="off">
            </div>
            <div class="mb-3">
                <label f class="form-label">Fee</label>
                <input type="text" class="form-control" placeholder="Enter Your Fee" name="fee" autocomplete="off">
            </div>
            <div class="mb-3">
                <label f class="form-label">Scholarship</label>
                <input type="text" class="form-control" placeholder="Enter Your Scholarship" name="scholarship" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>