<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    header('location:login.php');
  }

  $con = mysqli_connect('localhost:3307' , 'root' , 'root');

  mysqli_select_db($con , 'tourist');

  $xyz = $_GET['hotel_number'];

  $s = "SELECT * FROM rooms where rooms.room_id = $xyz; ";
  $result = mysqli_query($con , $s);
  $resultCheck = mysqli_num_rows($result);
  
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

      <?php
        if ($resultCheck > 0) {
          while ( $row = mysqli_fetch_assoc($result)) {
      ?>

      <div class="col-2 ml-5">
        
          <div class="card card-image mt-4 detail" style="width: 25vw; height: 71vh;">

           <?php echo '<div class="text-white text-center d-flex py-5 px-4" 
                style="background: url(data:image;base64,'.base64_encode($row['image']).'); background-repeat: no-repeat; background-size: cover;">' ?>
              <div class="mt-5 pt-3">
                <br><br>

                <p class="">  </p>
              </div>
            </div>

            <div class="card-body">
              
              <h6 class="card-tittle black-text ml-3"><b> <?php echo $row['room_type']; ?> </b><br>
                <b style="font-size: 10px;">4.0 <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span></b></h6>
              <p class="card-text black-text mr-3"> <?php echo $row['description']; ?></p>
             
            </div>

            <div class="card-footer">
              <a href="details.php">
              <button type="submit" class="btn btn-md btn-block active py-3"> Select This Room <i class="fas fa-angle-double-right ml-2"></i></button>
              </a>

            </div>

            
        </div>

      </div>
      
      <div class="col-1 ml-5 mt-5 pl-5">
          <div class="sidebar">
              <ul class="p-0 pt-4">
                <li class="py-1 text-center"><b><i class="fas fa-wifi"></i><br>24*7</b></li>
                <hr>
                <li class="py-1 text-center"><b><i class="fas fa-spa"></i><br>spa</b></li>
                <hr>
                <li class="py-1 text-center"><b><i class="fas fa-dumbbell"></i><br>gym</b></li>
                <hr>
                <li class="py-1 text-center"><b><i class="fas fa-users"></i><br>popular</b></li>
                <hr>
                <li class="py-1 text-center"><b><i class="fas fa-smoking-ban"></i><br>ban</b></li>
              </ul>
          </div>  
      </div>

      <?php
            }
          } 
      ?>
      
    </div>
  </div>
  


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


</body>
</html>