
  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
      <title>icoder-heaven for programmers</title>
    </head>
    <?php
        echo "get and post in php";
    ?>
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
                  <a class="nav-link " aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link " href="/about.html">About</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link active" href="/contact.html">Contact Us</a>
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
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      
        <div class="container my-4">
            <h2>Contact us</h2>
            <form action="" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@gmail.com">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Type your Query</label>
                <textarea class="form-control" id="password" rows="3" name="pass"></textarea>
              </div>
                        <!-- RADIO  BUTTONS -->

              <H6>are you a member?</H6>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                <label class="form-check-label" for="gridRadios1">
                  YES
                </label>
              </div>
              <div class="form-check ">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" >
                <label class="form-check-label" for="gridRadios2">
                  NO
                </label>
              </div>
            </div>
        


              <button class="btn btn-success">submit</button>
            </form>

        </div>
        
      
      
      
  
  
  
            
  
  
       <footer class="container">
          <p class="float-end"><a href="#">Back to top</a></p>
          <p>© 2020-2021 icoder, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>
        
      
      
      
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
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