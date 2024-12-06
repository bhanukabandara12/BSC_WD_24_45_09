<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobEntry</title>
    <link rel="stylesheet" href="../../../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/nav.css">
    <link rel="stylesheet" href="../../../css/jbct.css">
    <link rel="stylesheet" href="../../../css/home.css">
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
          <a class="nav-link" aria-current="page" href="user.php">Home</a>
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
<br><br><br><br>
<!--job cat-->

<div class="section">
<div class="container mt-5">
        <h2 class="text-center mb-4">Explore By Category</h2>
        <br>
        <div class="row">
            <div class="col-md-3 mb-4">
             <a href="">
                <div class="category-card">
                    <div class="category-icon">&#128231;</div>
                    <div class="category-title">Marketing & Maneging</div>
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




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="../../../js/script.js"></script>

</body>
</html>