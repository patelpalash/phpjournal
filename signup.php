<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $showAlert=false;
  $showError=false;
  require 'partials/_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword= $_POST["cpassword"];
  $exists = false;
  if(($password == $cpassword) && $exists==false){
    $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ( '$username', '$password', current_timestamp())";

    $result = mysqli_query($conn,$sql);

    if ($result){
      $showAlert = true;
    }
  }
  else{
    $showError="password do not match";

  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
  <?php
    require 'nav.php';
  ?>
  <?php
  if($showAlert==true){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success !</strong> Your account is generated successfully now you can login
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div> ';
  
  }
  if($showError==true){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Success !</strong> invalid password do not matching...
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div> ';
  
  }



?>


  <div class="container">
    <h1 class ="text-center">Signup to our Website</h1>


    <form action="signup.php" method="POST">

    <div class="mb-3 form-group col-md-6">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 form-group col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>

  <div class="mb-3 form-group col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="cpassword">
  </div>

  <div class="mb-3 form-check form-group col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Signup</button>
  </form>
  </div>



</body>
</html>