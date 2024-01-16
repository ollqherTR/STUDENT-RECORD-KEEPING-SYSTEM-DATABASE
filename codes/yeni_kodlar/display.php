<?php
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Display</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add Student</a>
    
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Field</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

    <?php
     $sql = "SELECT * FROM crud";
     $result = mysqli_query($con, $sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id= $row['id'];
            $name = $row['name'];
            $surname= $row['surname'];
            $email= $row['email'];
            $password= $row['password'];
            $field= $row['field'];
                echo '<tr>
                <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $surname . '</td>
                    <td>' . $email . '</td>
                    <td>' . $password . '</td>
                    <td>' . $field . '</td>
                    <td>
                    <button class="btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deleteid=' .$id. '" class="text-light">Delete</a></button>
                </td>

              </tr>';
        }
    }


    ?>
     


    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td> -->
    </tr>
  </tbody>
</table>
    </div>    


</body>
</html>