<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobEntry</title>
    <link rel="stylesheet" href="../../../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/home.css">
    <link rel="stylesheet" href="../../../css/nav.css">
    <link rel="stylesheet" href="../../../css/jbct.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    
</head>
<body>
    <!--Nav Bar-->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" href="user.php">JobEntry</a>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">JobEntry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="user.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="jobs.php">Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="jobCt.php">Job Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="contact.php">Contact</a>
          </li>
        </ul>
       
      </div>
    </div>
    <a href="jbpost.php" class = "login-button" >Post a Job</a>
    <button class="navbar-toggler pe-8" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<!--Nav Bar End-->

<!--hero section-->
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../../images/123.png" class="d-block w-100 img-fluid" alt="First slide">
      <div class="container">
      </div>
    </div>
    <div class="carousel-item">
      <img src="../../../images/1.png" class="d-block w-100 img-fluid" alt="Second slide">
      <div class="container">
      </div>
    </div>
    <div class="carousel-item">
      <img src="../../../images/123.png" class="d-block w-100 img-fluid" alt="Third slide">
      <div class="container">
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

<style>
  .carousel-item img {
    height: 600px; 
    object-fit: cover;
  }
</style>
<!--End hero section-->

<!--search section-->

<!--end search section-->

<!--start catogory section-->
<div class="section">
   
   <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Marketing</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h6 class="mb-3">Customer Service</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h6 class="mb-3">Human Resource</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                            <h6 class="mb-3">Project Management</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                            <h6 class="mb-3">Business Development</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                            <h6 class="mb-3">Sales & Communication</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                            <h6 class="mb-3">Teaching & Education</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3">Design & Creative</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      

</div>
<!-- Category End -->


<!--avilable jobs-->
<div class="section">
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12 mb-3">
                        <img src="../../../images/ado.jpg" class="img-fluid" alt="Group of professionals">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1>We Help You Find the Perfect Job and Discover Top Talent</h1>
                <p>Unlock your potential with our platform, designed to connect job seekers and employers seamlessly. Whether you're searching for your dream job or looking for exceptional talent, we've got you covered!</p>
                <ul>
                    <li>Explore Opportunities: Find jobs tailored to your skills and goals.</li>
                    <li>Connect with Talent: Access a pool of qualified and skilled professionals.</li>
                    <li>Build Your Career: Gain insights and resources to achieve professional success.</li>
                </ul>
                <a href="about.php" class = "login-button">Read More</a>
            </div>
        </div>
    </div>

</div>

<!--end-->
<!--job list-->
<div class="section">
<div class="container mt-5">
        <h1 class="text-center mb-4">Job Listing</h1>
        <div class="job-listing">
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="techcom-logo.png" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Software Engineer</h2>
                    <p class="mb-1">
                        <span class="location">New York, USA</span> | 
                        <span class="salary">$123 - $456</span>
                    </p>
                    <p class="deadline">Deadline: 01 Jan, 2045</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="international-hearts-logo.png" alt="International     bb" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Marketing Manager</h2>
                    <p class="mb-1">
                        <span class="location">New York, USA</span> | 
                        <span class="salary">$123 - $456</span>
                    </p>
                    <p class="deadline">Deadline: 01 Jan, 2045</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="techcom-logo.png" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Software Engineer</h2>
                    <p class="mb-1">
                        <span class="location">New York, USA</span> | 
                        <span class="salary">$123 - $456</span>
                    </p>
                    <p class="deadline">Deadline: 01 Jan, 2045</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="techcom-logo.png" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Software Engineer</h2>
                    <p class="mb-1">
                        <span class="location">New York, USA</span> | 
                        <span class="salary">$123 - $456</span>
                    </p>
                    <p class="deadline">Deadline: 01 Jan, 2045</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="techcom-logo.png" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Software Engineer</h2>
                    <p class="mb-1">
                        <span class="location">New York, USA</span> | 
                        <span class="salary">$123 - $456</span>
                    </p>
                    <p class="deadline">Deadline: 01 Jan, 2045</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
    </div>
<!--end-->
<div class="container text-center mt-5"> 
  <a href="jobs.php">
  <button class="login-button">Browse More Jobs</button>
</a>
 </div>
 <br>

 <!--customer say-->

 
 <!--end-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="../../../js/new.js"></script>
</body>
</html>