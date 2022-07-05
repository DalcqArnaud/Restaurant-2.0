<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localisation - La Rose dorée</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/3daa86828a.js" crossorigin="anonymous"></script>

    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
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
            <a class="nav-link active text-secondary" aria-current="page" href="#"><span class="active"><span class="navbtn"><i class="fa-solid fa-location-dot"></i> Locations</span></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="contact.php"><span class="navbtn"><i class="fa-solid fa-address-book"></i> Contact</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="backoffice.php"><span class="navbtn"><i class="fa-solid fa-display"></i> Back office</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Localisation -->
  <div class="container">
    <div class="row g-0 justify-content-between my-5 mx-4 d-flex flex-wrap">
      <!-- Informations -->
      <div class="col-sm-12 col-md-4 my-4">
        <h1>Restaurants</h1>
        <hr>
        <h2>La Rose dorée</h2>
        <p class="lead">Hurlevent, 85190 Aizenay, France</p>
        <p class="lead"><strong>Hours :</strong> <br> monday - friday : <em>10am - 11pm</em> <br> weekend : <em>closed</em></p>
        <hr>
        <h2>La Rose argentée</h2>
        <p class="lead">Forgefer, 87250 Folles, France</p>
        <p class="lead"><strong>Hours :</strong> <br> monday - friday : <em>9am - 10pm</em><br> weekend : <em>10am - 2pm</em></p>
      </div>
      <!-- Map -->
      <div class="col-sm-12 col-md-7">
        <iframe src="https://www.google.com/maps/d/embed?mid=1u6s89sODfoLYquGIG20Et3jEQKvP-wy6&ehbc=2E312F" class="gmap w-100"></iframe>
      </div>
    </div>
  </div>

  <!-- Global Footer -->
  <!-- Spacer -->
  <div class="m-5 p-5">
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