<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - La Rose dorée</title>

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
            <a class="nav-link active text-secondary" aria-current="page" href="#"><span class="active"><span class="navbtn"><i class="fa-solid fa-scroll"></i> Menu</span></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="pictures.php"><span class="navbtn"><i class="fa-solid fa-image"></i> Gallery</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="restaurant.php"><span class="navbtn"><i class="fa-solid fa-location-dot"></i> Locations</span></a>
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

  <!-- Menu List -->
  <!-- Food -->
  <main>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6">
          <h1 class="display-5 mt-4 text-center">Food</h1>
          <ul class="list-group m-4 w-auto gap-2">
              <li class="food list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto text-white">
                  <h4>Homemade Cherry Pie</h4>
                  <p>Restores 2148 health over 30 sec. Must remain seated while eating.</p>
                  <p class="mb-0"><strong>32PA</strong></p>
                  <span class="badge bg-danger rounded-pill"> Requires Level 45</span>
                  <span class="badge bg-info rounded-pill"> Max Stack: 20</span>  
                </div>
              </li>
              <li class="food list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto text-white">
                  <h4>Soft Banana Bread</h4>
                  <p>Restores 1392 health over 30 sec. Must remain seated while eating.</p>
                  <p class="mb-0"><strong>16PA</strong></p>
                  <span class="badge bg-danger rounded-pill"> Requires Level 35</span>
                  <span class="badge bg-info rounded-pill"> Max Stack: 20</span>  
                </div>
              </li>
              <li class="food list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto text-white">
                  <h4>Mulgore Spice Bread</h4>
                  <p>Restores 874.8 health over 27 sec. Must remain seated while eating.</p>
                  <p class="mb-0"><strong>8PA</strong></p>
                  <span class="badge bg-danger rounded-pill"> Requires Level 25</span>
                  <span class="badge bg-info rounded-pill"> Max Stack: 20</span> 
                </div>
              </li>
              <li class="food list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto text-white">
                  <h4>Moist Cornbread</h4>
                  <p>Restores 552 health over 24 sec. Must remain seated while eating.</p>
                  <p class="mb-0"><strong>4PA</strong></p>
                  <span class="badge bg-danger rounded-pill"> Requires Level 15</span>
                  <span class="badge bg-info rounded-pill"> Max Stack: 20</span>   
                </div>
              </li>
              <li class="food list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto text-white">
                  <h4>Freshly Baked Bread</h4>
                  <p>Restores 243.6 health over 21 sec. Must remain seated while eating.</p>
                  <p class="mb-0"><strong>1PA</strong></p>
                  <span class="badge bg-danger rounded-pill"> Requires Level 5</span>
                  <span class="badge bg-info rounded-pill"> Max Stack: 20</span>  
                </div>
              </li>
              <li class="food list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto text-white">
                  <h4>Tough Hunk of Bread</h4>
                  <p>Restores 61.2 health over 18 sec. Must remain seated while eating.</p>
                  <p class="mb-0"><strong>26PC</strong></p>
                  <span class="badge bg-info rounded-pill"> Max Stack: 20</span> 
                </div>
              </li>
          </ul>
        </div>
        <!-- Drink -->
        <div class="col-sm-12 col-md-6">
          <h1 class="display-5 mt-4 text-center">Drink</h1>
          <ul class="list-group m-4 w-auto gap-2">
            <li class="drink list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto text-white">
                <h4>Morning Glory Dew</h4>
                <p>Restores 2934 mana over 30 sec. Must remain seated while drinking.</p>
                <p class="mb-0"><strong>32PA</strong></p>
                <span class="badge bg-danger rounded-pill"> Requires Level 45</span>
                <span class="badge bg-info rounded-pill"> Max Stack: 20</span>         
              </div>        
            </li>
            <li class="drink list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto text-white">
                <h4>Moonberry Juice</h4>
                <p>Restores 1992 mana over 30 sec. Must remain seated while drinking.</p>
                <p class="mb-0"><strong>16PA</strong></p>
                <span class="badge bg-danger rounded-pill"> Requires Level 35</span>
                <span class="badge bg-info rounded-pill"> Max Stack: 20</span>
              </div>
            </li>
            <li class="drink list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto text-white">
                <h4>Sweet Nectar</h4>
                <p>Restores 1344.6 mana over 27 sec. Must remain seated while drinking.</p>
                <p class="mb-0"><strong>8PA</strong></p>
                <span class="badge bg-danger rounded-pill"> Requires Level 25</span>
                <span class="badge bg-info rounded-pill"> Max Stack: 20</span> 
              </div>
            </li>
            <li class="drink list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto text-white">
                <h4>Melon Juice</h4>
                <p>Restores 835.2 mana over 24 sec. Must remain seated while drinking.</p>
                <p class="mb-0"><strong>4PA</strong></p>
                <span class="badge bg-danger rounded-pill"> Requires Level 15</span>
                <span class="badge bg-info rounded-pill"> Max Stack: 20</span> 
              </div>
            </li>
            <li class="drink list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto text-white">
                <h4>Ice Cold Milk</h4>
                <p>Restores 436.8 mana over 21 sec. Must remain seated while drinking.</p>
                <p class="mb-0"><strong>1PA</strong></p>
                <span class="badge bg-danger rounded-pill"> Requires Level 5</span>
                <span class="badge bg-info rounded-pill"> Max Stack: 20</span>  
              </div>
            </li>
            <li class="drink list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto text-white">
                <h4>Refreshing Spring Water</h4>
                <p>Restores 151.2 mana over 18 sec. Must remain seated while drinking.</p>
                <p class="mb-0"><strong>27PC</strong></p>        
                <span class="badge bg-info rounded-pill"> Max Stack: 20</span> 
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>

  <!-- Global Footer -->
  <!-- Spacer -->
  <div class="m-5 p-4">
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