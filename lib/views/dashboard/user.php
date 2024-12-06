<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobEntry</title>
    <link rel="stylesheet" href="../../../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/home.css">
    <link rel="stylesheet" href="../../../css/nav.css">
    
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
      <img src="../../../images/gg.jpg" class="d-block w-100 img-fluid" alt="First slide">
      <div class="container">
      </div>
    </div>
    <div class="carousel-item">
      <img src="../../../images/gg.jpg" class="d-block w-100 img-fluid" alt="Second slide">
      <div class="container">
      </div>
    </div>
    <div class="carousel-item">
      <img src="../../../images/gg.jpg" class="d-block w-100 img-fluid" alt="Third slide">
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
<div class="section">
<div class="container mt-5">
        <h2 class="text-center mb-4">Explore By Category</h2>
        <br>
        <div class="row">
            <div class="col-md-3 mb-4">
             <a href="">
                <div class="category-card">
                    <div class="category-icon">&#128231;</div>
                    <div class="category-title">Marketing</div>
                    <div class="category-vacancy">5 Vacancy</div>
                </div>
               </a>
            </div>
            <div class="col-md-3 mb-4">
              <a href="">
                <div class="category-card">
                    <div class="category-icon">&#128222;</div>
                    <div class="category-title">Customer Service</div>
                    <div class="category-vacancy">5 Vacancy</div>
                </div>
              </a>
            </div>
            <div class="col-md-3 mb-4">
              <a href="">
                <div class="category-card">
                    <div class="category-icon">&#128100;</div>
                    <div class="category-title">Human Resource</div>
                    <div class="category-vacancy">5 Vacancy</div>
                </div>
              </a>
            </div>
            <div class="col-md-3 mb-4">
            <a href="">
                <div class="category-card">
                    <div class="category-icon">&#128221;</div>
                    <div class="category-title">Project Management</div>
                    <div class="category-vacancy">5 Vacancy</div>
                </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
               <a href="">
                <div class="category-card">
                    <div class="category-icon">&#128200;</div>
                    <div class="category-title">Business Development</div>
                    <div class="category-vacancy">5 Vacancy</div>
                </div>
               </a>
            </div>
            <div class="col-md-3 mb-4">
            <a href="">
                <div class="category-card">
                    <div class="category-icon">&#128172;</div>
                    <div class="category-title">Sales & Communication</div>
                    <div class="category-vacancy">5 Vacancy</div>
                </div>
              </a>
            </div>
            <div class="col-md-3 mb-4">
            <a href="">
                <div class="category-card">
                    <div class="category-icon">&#128218;</div>
                    <div class="category-title">Teaching & Education</div>
                    <div class="category-vacancy">5 Vacancy</div>
                </div>
               </a>
            </div>
            <div class="col-md-3 mb-4">
              <a href="">
                <div class="category-card">
                    <div class="category-icon">&#128736;</div>
                    <div class="category-title">Design & Creative</div>
                    <div class="category-vacancy">5 Vacancy</div>
                </div>
                </a>
            </div>
        </div>
    </div>
</div>

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
                    <button class="btn btn-success">Apply Now</button>
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
                    <button class="btn btn-success">Apply Now</button>
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
                    <button class="btn btn-success">Apply Now</button>
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
                    <button class="btn btn-success">Apply Now</button>
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
                    <button class="btn btn-success">Apply Now</button>
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
 <br><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>