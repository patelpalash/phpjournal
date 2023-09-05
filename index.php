<?php
  session_start();

  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
  }


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome - <?php $_SESSION['username'] ?></title>
  </head>
  <body>
  Welcome - <?php echo $_SESSION['username']; ?>
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
                <button class="btn btn-danger" data-toggle="modal" data-target="#loginModal" >Login</button>
                <button class="btn btn-danger" data-toggle="modal" data-target="#signupModal">SignUp</button>

            </div>
          </div>
        </div>
      </nav>

        <!-- login  modal -->
      <div class="modal" id="loginmodal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>


        <!-- signup modal -->
      <div class="modal" id="signupmodal"  tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    

    
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://source.unsplash.com/1400x500/?mac,coding,programming" class="d-block w-100" alt="loading image">
            <div class="carousel-caption d-none d-md-block ">
              <h2>Welcome to icoder</h2>
              <p>technology News,Development and Trends</p>
              <div class="button btn btn-danger">Technology</div>
              <div class="button btn btn-primary">Webdevelopment</div>
              <div class="button btn btn-success">Tech fun</div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1400x500/?coding,hacker"  class="d-block w-100" alt="Loading image">
            <div class="carousel-caption d-none d-md-block">
                <h2>Award winning Blog</h2>
                <p>technology News,Development and Trends</p>
                <div class="button btn btn-danger">Technology</div>
                <div class="button btn btn-primary">Webdevelopment</div>
                <div class="button btn btn-success">Tech fun</div>
              </div>
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1400x500/?coder,programming"  class="d-block w-100" alt="Loading image">
            <div class="carousel-caption d-none d-md-block">
                <h2>The best coding blog</h2>
                <p>technology News,Development and Trends</p>
                <div class="button btn btn-danger">Technology</div>
                <div class="button btn btn-primary">Webdevelopment</div>
                <div class="button btn btn-success">Tech fun</div>
              </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">world</strong>
                  <h3 class="mb-0">Global Coding Conferences </h3>
                  <div class="mb-1 text-muted">Nov 12</div>
                  <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/200x250/?network" alt="Loading image">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-success">Design</strong>
                  <h3 class="mb-0">Learn Web-designing</h3>
                  <div class="mb-1 text-muted">Nov 11</div>
                  <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/200x250/?webdesign" alt="Loading image">
        
                </div>
              </div>
            </div>
          </div>


            <div class="row mb-2">
                <div class="col-md-12">
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-primary">world</strong>
                      <h3 class="mb-0">Global Coding Conferences </h3>
                      <div class="mb-1 text-muted">Nov 12</div>
                      <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/200x250/?teacher" alt="Loading image">
                    </div>
                  </div>
                </div>


                    <!-- this is a footer -->
                <footer class="container">
                    <p class="float-end"><a href="#">Back to top</a></p>
                    <p>© 2020-2021 tradmark by palash patel, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
                  </footer>
            
    


          

          
    </div>














    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>