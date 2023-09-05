<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $login=false;
  $showError=false;
  
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    require 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
  
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' ";

    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
      $login = true;
      session_start();
      $_SESSION['loggedin']=true;
      $_SESSION['username']=$username;
      header("location:index.php");
    }
  }
  else{
    $showError="invalid credentials";

  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
  <?php
    require 'nav.php';
  ?>

  <?php
  if($login==true){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success !</strong> Your are logged in
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div> ';
  
  }
  if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Success !</strong>' .$showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div> ';
  
  }



?>


  <div class="container">
    <h1 class ="text-center">Login to our Website</h1>


    <form action="login.php" method="POST">

    <div class="mb-3 form-group col-md-6">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 form-group col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
  </form>
  </div>



</body>
</html>