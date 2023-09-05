
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
                  <a class="nav-link " aria-current="page" href="index.html">Home</a>
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
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $desc= $_POST['desc'];

        $servername = "localhost";
        $username ="root";
        $password="";
        $database="contacts";
        
        $conn = mysqli_connect($servername,$username,$password,$database);
          if ($conn == false) {
            die("your code is not working and we can't make a connection to our database".mysqli_connect_error());
          }
          else{
            print("connection was successfull<br>");

            $sql = "INSERT INTO `contactus` ( `name`, `email`, `concern`, `dt`) VALUES ( '$name', '$email', '$desc', current_timestamp())";
            $result=mysqli_query($conn,$sql);
            if($result){
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>SUCCESS</strong> your entry submited successfully
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                }
            else{
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>SUCCESS</strong> your entry was not  successfull because our system is hacked right now we are making sure to fix that. thanks for your patients
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';

            }
          }

        }
        //submit this to a database
    ?>

      
        <div class="container my-4">
            <h2>Contact us for your concerns</h2>
            <form action="contact.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" name="name" id="name" >
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@gmail.com">
              </div>

              <div class="mb-3">
                <label for="desc" class="form-label">Type your Query</label>
                <textarea class="form-control" id="desc" rows="7" name="desc"></textarea>
              </div>
 
              <button class="btn btn-success">submit</button>

            </form>

        </div>
        
      
      
      
  
  
  
            
  
  
       <footer class="container">
          <p class="float-end"><a href="#">Back to top</a></p>
          <p>© 2020-2021 icoder trademark by palash patel, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
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