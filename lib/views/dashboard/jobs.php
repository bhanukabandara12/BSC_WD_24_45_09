<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobEntry</title>
    <link rel="stylesheet" href="../../../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/nav.css">
    <link rel="stylesheet" href="../../../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
     
    <style>
         .fa-map-marker-alt {
            color:#3ECE75; 
        }

        .fa-wallet{
            color:#3ECE75; 
        }

        .fa-calendar-alt{
            color:#3ECE75; 
        }
    </style>
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
<!--start jobs-->
<!--marketing jobs-->
<div class="section">
<div class="container mt-5">
        <h1 class="text-center mb-4" id = "first">Marketing</h1>
        <div class="job-listing">
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/17.jpg" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Marketing manager LAUGFS Super</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Negambo,Sri Lanka</span> | 
                        <i class="fas fa-wallet"></i>
                        <span class="salary">Rs 75 000</span>
                    </p>
                    <p  class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 28 Dec, 2024</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/18.jpg" alt="International     bb" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Digital Marketing Manager</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Abans KCC, Kandy</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 55 000 - Rs 85 000</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 25 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/19.jpg" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Digital Marketing Manager Pizza Hut</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Kundasale, Kandy</span> | 
                        <i class="fas fa-wallet"></i>
                        <span class="salary">Rs 45 000 - Rs 55 000</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 17 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!--end marketing jobs-->

<!--start coustomer service jos-->
<div class="section">
<div class="container mt-5">
        <h1 class="text-center mb-4" id = "custom">Coustomer Service</h1>
        <div class="job-listing">
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/15.png" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Coustomer Service Assistant</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">kadawatha,Colombo</span> | 
                        <i class="fas fa-wallet"></i>
                        <span class="salary">Rs 55 000</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 03 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/20.jpg" alt="International     bb" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Delivery Rider Full Time</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Peradeniya, Kandy</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 25 000 up</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 01 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/21.png" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Customer Relationship Assistant - SEYLAN BANK</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Anuradhapura, Sri Lanka</span> | 
                        <i class="fas fa-wallet"></i>
                        <span class="salary">Rs 55 000 - Rs 75 000</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 01 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
           
        </div>
    </div>
</div>

<!--end coustomer service jos-->

<!--start human job-->
<div class="section">
<div class="container mt-5">
        <h1 class="text-center mb-4" id = "human">Human Resource</h1>
        <div class="job-listing">
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/28.jpg" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">HR Coordinator - Arpico </h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Kundasale, Kandy</span> | 
                        <i class="fas fa-wallet"></i>
                        <span class="salary">Rs 50 000 up</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 01 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/18.jpg" alt="International     bb" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Abans Internship HR (Male)</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Colombo</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 45 000 up</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 05 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/24.jpg" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Internship HR - Dialog Sri Lanka</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Galle, Sri Lanka</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 45 000 up</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 01 Feb, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!--end human job-->

<!--start project mang-->
    
<div class="section">
<div class="container mt-5">
        <h1 class="text-center mb-4" id = "prma">Project Management</h1>
        <div class="job-listing">
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/22.png" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Senior Software Developer </h2>
                    <p class="mb-1">
                       <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Colombo, Sri Lanka</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 100 000 up</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 01 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/23.jpg" alt="International     bb" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Junior Porject Manager - SLT Mobitel</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Kandy</span> | 
                        <i class="fas fa-wallet"></i>
                        <span class="salary">Rs 75 000 - Rs 100 000</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 01 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/24.jpg" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Porject Manage - Dialog Sri Lanka</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Galle, Sri Lanka</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 150 000 up</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 01 Feb, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!--end project manage-->

<!--Businuss dev job-->
<div class="section">
<div class="container mt-5">
        <h1 class="text-center mb-4" id = "bude">Business Development</h1>
        <div class="job-listing">
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/25.jpg" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Group Finance Manager - Lassana Flora</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Colombo</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 55 000</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 01 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/26.jpg" alt="International     bb" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Sales Dalegate - HEMAS Pharmaceuticals</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Kundasale, Kandy</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 75 000 - Rs 100 000</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 01 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/27.jpg" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Area Sales Manager - Royal Ceramics</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Katugastota, Kandy</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 100 000 - Rs 120 000</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 13 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!--end-->

<!--start seales & communication job-->
   
<div class="section">
<div class="container mt-5">
        <h1 class="text-center mb-4" id = "sale">Sales & Communication</h1>
        <div class="job-listing">
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/26.jpg" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Sales Delegate - HEMAS PVT </h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Colombo, Sri Lanka</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 100 000 up</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 01 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/29.jpg" alt="International     bb" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Aftre Sales Executive</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Galle / Colombo</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 75 000 - Rs 100 000</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 01 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/27.jpg" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Showroom Manager Royal Ceramics</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Galle, Sri Lanka</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 75 000 up</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 12 Feb, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!--end job-->

<!--start teacher jobs-->
     
<div class="section">
<div class="container mt-5">
        <h1 class="text-center mb-4" id = "teach">Teaching & Education</h1>
        <div class="job-listing">
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/30.png" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">English Lecture at SIBA Campus </h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Pallekele, Kundasale</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 55 000 up</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 01 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/31.jpg" alt="International     bb" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Pre School Teacher - Kids Play Pre School</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Kandy</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 35 000 - Rs 45 000</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 16 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/32.png" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">IT Lecture at Sliit Campus </h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Kandy, Sri Lanka</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 120 000 up</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 25 Feb, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!--end  teacher jobs-->

<!--start design and creat-->
   
<div class="section">
<div class="container mt-5">
        <h1 class="text-center mb-4" id = "desi">Design & Creative</h1>
        <div class="job-listing">
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/33.jpg" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Web Developer - Softlogic PvT LTD </h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Colombo, Sri Lanka</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 100 000 up</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 01 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/14.jpg" alt="International     bb" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Fashion Designer - ODEL PLC</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Colombo</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 175 000 - Rs 200 000</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 01 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/34.jpg" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Tailor - Hameediya Fashion</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Kandy, Sri Lanka</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 50 000 up</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 12 Feb, 205</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!--end-->
<br><br><br>
<!--footer section-->
<div class="section">
  <footer class="text-center text-white" style="background-color:#3ECE75">
    <div class="container">
      <section class="mt-1">
        <div class="row text-center d-flex justify-content-center pt-5">
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="about.php" class="text-white">About us</a>
            </h6>
          </div>

          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="jobs.php" class="text-white">Jobs</a>
            </h6>
          </div>

          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="jbpost.php" class="text-white">Post a Job</a>
            </h6>
          </div>
          
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="commment.php" class="text-white">Add Comment</a>
            </h6>
          </div>

          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="contact.php" class="text-white">Contact</a>
            </h6>
          </div>
        </div>
      </section>

      <hr class="my-5" />

      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
              "Find your dream job with ease! Our platform connects job seekers with top employers, 
              offering opportunities across various industries. 
              Start your career journey today and discover your potential."
            </p>
          </div>
        </div>
      </section>
      <!-- Section: Text -->

      <!-- Section: Social -->
      <section class="text-center mb-5">
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
      </section>
      <!-- Section: Social -->
    </div>
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2024 All Rights Reserved : jobentry.com
   </div>
  </footer>
</div>
 <!--End  Footer -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>