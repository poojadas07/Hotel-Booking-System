<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    header('location:login.php');
  }

  $con = mysqli_connect('localhost' , 'root' , 'root');

  mysqli_select_db($con , 'tourist');

  
  
?>

<!DOCTYPE html>
<html>
<head>
  <title>Our Rooms</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="rooms.css">

</head>
<body>

  <div class="container-fluid">
    <div class="row">
      
      <div class="card first mt-1">
        <img src="images/left1.jpg" alt="photo" style="width:100%">
        <div class="dropdown">

          <a class="dropdown" data-toggle="dropdown">
            <p style="font-weight: 900; font-family: 'Cinzel Decorative'; color: #000;">
              <?php echo $_SESSION['username']; ?>
              <i class="fas fa-angle-down ml-2"></i>
            </p>
          </a>

          <div class="dropdown-menu">
              <a class="dropdown-item" href="logout.php"> Logout </a>
          </div>

        </div>
        
      </div>
      <h1> Our Rooms </h1><br>

    </div>
    <div class="row ml-4">

      <div class="col-2 ml-5">
        
          <div class="card card-image mt-4 detail" style="width: 25vw; height: 75vh;">

           <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4" 
                style="background: url('./images/left1.jpg');background-repeat: no-repeat; background-size: cover;">
              <div class="mt-5">
                <br><br>

                <a class="btn btn-pink mt-4">%</a>
              </div>
            </div>

            <div class="card-body">
              
              <h6 class="card-tittle black-text ml-3">Hotel Name <br><i class="fas fa-star pr-1" style="font-size: 12px;"> jhgfghj</i></h6>
              <p class="card-text black-text mr-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt.</p>
              <hr>
              <a href="rooms.php">
              <button type="submit" class="btn btn-md btn-block active"> Select This Room <i class="fas fa-angle-double-right ml-2"></i></button>
              </a>

          </div>
            
        </div>

      </div>
      
      <div class="col-1 ml-5 mt-5 pl-5">
          <div style="width: 5vw; height: 71vh; background-color: #0000ff; color: #fff;">
              <ul class="p-0 pt-4">
                <li class="py-2 text-center">a</li>
                <hr>
                <li class="py-2 text-center">a</li>
                <hr>
                <li class="py-2 text-center">a</li>
                <hr>
                <li class="py-2 text-center">a</li>
                <hr>
                <li class="py-2 text-center">a</li>
                <hr>
                <li class="py-2 text-center">a</li>
              </ul>
          </div>  
      </div>

      <div class="col-2 ml-5">
        
          <div class="card card-image mt-4 detail" style="width: 25vw; height: 75vh;">

           <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4" 
                style="background: url('./images/left1.jpg');background-repeat: no-repeat; background-size: cover;">
              <div class="mt-5">
                <br><br>

                <a class="btn btn-pink mt-4">%</a>
              </div>
            </div>

            <div class="card-body">
              
              <h6 class="card-tittle black-text ml-3">Hotel Name <br><i class="fas fa-star pr-1" style="font-size: 12px;"> jhgfghj</i></h6>
              <p class="card-text black-text mr-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt.</p>
              <hr>
              <a href="rooms.php">
              <button type="submit" class="btn btn-md btn-block active"> Select This Room <i class="fas fa-angle-double-right ml-2"></i></button>
              </a>

          </div>
            
        </div>

      </div>
      
      <div class="col-1 ml-5 mt-5 pl-5">
          <div style="width: 5vw; height: 71vh; background-color: #0000ff; color: #fff;">
              <ul class="p-0 pt-4">
                <li class="py-2 text-center">a</li>
                <hr>
                <li class="py-2 text-center">a</li>
                <hr>
                <li class="py-2 text-center">a</li>
                <hr>
                <li class="py-2 text-center">a</li>
                <hr>
                <li class="py-2 text-center">a</li>
                <hr>
                <li class="py-2 text-center">a</li>
              </ul>
          </div>  
      </div>

      <div class="col-2 ml-5">
        
          <div class="card card-image mt-4 detail" style="width: 25vw; height: 75vh;">

           <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4" 
                style="background: url('./images/left1.jpg');background-repeat: no-repeat; background-size: cover;">
              <div class="mt-5">
                <br><br>

                <a class="btn btn-pink mt-4">%</a>
              </div>
            </div>

            <div class="card-body">
              
              <h6 class="card-tittle black-text ml-3">Hotel Name <br><i class="fas fa-star pr-1" style="font-size: 12px;"> jhgfghj</i></h6>
              <p class="card-text black-text mr-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt.</p>
              <hr>
              <a href="rooms.php">
              <button type="submit" class="btn btn-md btn-block active"> Select This Room <i class="fas fa-angle-double-right ml-2"></i></button>
              </a>

          </div>
            
        </div>

      </div>
      
      <div class="col-1 ml-5 mt-5 pl-5">
          <div style="width: 5vw; height: 71vh; background-color: #0000ff; color: #fff;">
              <ul class="p-0 pt-4">
                <li class="py-2 text-center">a</li>
                <hr>
                <li class="py-2 text-center">a</li>
                <hr>
                <li class="py-2 text-center">a</li>
                <hr>
                <li class="py-2 text-center">a</li>
                <hr>
                <li class="py-2 text-center">a</li>
                <hr>
                <li class="py-2 text-center">a</li>
              </ul>
          </div>  
      </div>
      
    </div>
  </div>
  


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


</body>
</html>