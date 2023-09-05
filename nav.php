<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container-fluid">
  <a class="navbar-brand" href="#">icoder</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">ContactUs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Topics
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Technology</a></li>
            <li><a class="dropdown-item" href="#">Web Development</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Write for Us</a></li>
          </ul>

      </li>
    </ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-danger" type="danger">Search</button>
    </form>
    <div class="mx-2">
      <a href="signup.php">
      <button class="btn btn-danger" data-toggle="modal" data-target="#signupModal">SignUp</button>

      </a>
      <a href="login.php">
      <button class="btn btn-danger" data-toggle="modal" data-target="#loginModal" >Login</button>

      </a>

      <a href="logout.php">
      <button class="btn btn-danger" data-toggle="modal" data-target="#signupModal">Logout</button>

      </a>


    </div>
  </div>
</div>
</nav>

</body>
</html>
