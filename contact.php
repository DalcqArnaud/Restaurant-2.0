<?php 
  include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - La Rose dorée</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/3daa86828a.js" crossorigin="anonymous"></script>

    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
  <?php 
    if(isset($_POST['submitBtn'])){
        $date = new DateTime("now", new DateTimeZone('Europe/Brussels'));
        $currentDate = $date -> format('Y-m-d H:i');
        $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
        $lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
        $name = $firstName . " " . $lastName;
        $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

        $sql="insert into contact_messages (Date,Name,Email,Message) values('$currentDate','$name','$email','$message')";
        $result=$conn->prepare($sql);
        $result->execute();
    }
  ?>
  <!-- Global Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#"><i class="fa-solid fa-utensils"></i> La Rose dorée</a>
      <button class="navbar-toggler text-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-dark navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php"><span class="navbtn"><i class="fa-solid fa-house"></i> Home</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="menu.php"><span class="navbtn"><i class="fa-solid fa-scroll"></i> Menu</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="pictures.php"><span class="navbtn"><i class="fa-solid fa-image"></i> Gallery</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="restaurant.php"><span class="navbtn"><i class="fa-solid fa-location-dot"></i> Locations</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-secondary" aria-current="page" href="#"><span class="active"><span class="navbtn"><i class="fa-solid fa-address-book"></i> Contact</span></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="backoffice.php"><span class="navbtn"><i class="fa-solid fa-display"></i> Back office</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contact form -->
  <div class="m-5">
    <div class="container">
      <form method="post">
        <div class="row">
          <div class="col-6 mb-3">
            <label for="exampleFormControlInput1" class="form-label">Firstname</label>
            <input class="form-control" name="firstName" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="col-6 mb-3">
            <label for="exampleFormControlInput1" class="form-label">Lastname</label>
            <input class="form-control" name="lastName" id="exampleFormControlInput1" placeholder="">
          </div>
        </div>
        <div class="row gx-0">
          <div class="col-12 mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
        </div>
        <div class="row gx-0">
          <div class="col-12 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Subject</label>
            <div class="dropdown me-1">
              <button type="button" class="btn dropdown-toggle text-white" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                Select
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                <li><a class="dropdown-item" href="#">Reservation</a></li>
                <li><a class="dropdown-item" href="#">Foods & Drinks</a></li>
                <li><a class="dropdown-item" href="#">Location</a></li>
                <li><a class="dropdown-item" href="#">Other</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row gx-0">
          <div class="col-12 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your message here ..."></textarea>
          </div>
        </div>
        <div class="row gx-0">
          <div class="col-12">
            <button type="submit" name="submitBtn" class="btn text-white submitbtn"><span class="submitbtnhover"><i class="fa-solid fa-paper-plane"></i> Submit</span></button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Global Footer -->
  <!-- Spacer -->
  <div class="m-5 p-3">
    <div class="container"></div>
  </div>
  <!-- Footer -->
  <footer class="text-center text-white fixed-bottom">
    <!-- Facebook -->
    <a class="btn btn-link btn-floating btn-lg text-white m-1" href="https://www.facebook.com/" role="button" target="_blank">
      <i class="fab fa-facebook-f"></i>
    </a>

    <!-- Twitter -->
    <a class="btn btn-link btn-floating btn-lg text-white m-1" href="https://twitter.com/home" role="button" target="_blank">
      <i class="fab fa-twitter"></i>
    </a>

    <!-- Instagram -->
    <a class="btn btn-link btn-floating btn-lg text-white m-1" href="https://www.instagram.com/" role="button" target="_blank">
      <i class="fab fa-instagram"></i>
    </a>

    © 2022 Copyright: <strong>Arnaud Dalcq</strong> (made with Bootstrap.)
            
  </footer>
  <!-- Js Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>