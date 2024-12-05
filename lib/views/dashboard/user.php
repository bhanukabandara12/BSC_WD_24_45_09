<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobEntry</title>
    <link rel="stylesheet" href="../../../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/home.css">
</head>
<body>
    <!--Nav Bar-->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" href="#">JobEntry</a>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">JobEntry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">Job Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">Contact</a>
          </li>
        </ul>
       
      </div>
    </div>
    <a href="" class = "login-button" >Post a Job</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<!--Nav Bar End-->

<!--hero section-->
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item carousel-item-next carousel-item-start">
        <img src="../../../images/gettyimages.jpg" class="d-block w-100" alt="First slide" style="height: 550px;">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 style="color: black;">LATEST DROP.</h1>
            <p class="opacity-75" style="color: black;">NEW COLLECTION + RESTOCKS.</p>
            <p><a class="btn  btn-primary" href="new.html">SHOP NEW</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/9 (2).jpg" class="d-block w-100" alt="Second slide" style="height: 550px;">
        <div class="container">
          <div class="carousel-caption">
            <h1>The perfect fit.</h1>
            <p>Being different is a beautiful thing to be</p>
            <p><a class="btn  btn-primary" href="about.html">About Us</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active carousel-item-start">
        <img src="images/style (1).png" class="d-block w-100" alt="Third slide" style="height: 550px;">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>#Culture By SL</h1>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!--End hero section-->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>