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
    <!--<link rel="stylesheet" href="../../../css/client.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
   <!--Job list icon color--> 
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
    <!--end-->
</head>
<body>
    <!--Nav Bar-->
<div class="section">
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
</div>    
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
      <img src="../../../images/sis.png" class="d-block w-100 img-fluid" alt="First slide">
      <div class="container">
      </div>
    </div>
    <div class="carousel-item">
      <img src="../../../images/ttr.png" class="d-block w-100 img-fluid" alt="Second slide">
      <div class="container">
      </div>
    </div>
    <div class="carousel-item">
      <img src="../../../images/sis.png" class="d-block w-100 img-fluid" alt="Third slide">
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
<div class="section">
<div class="container-fluid mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;background-color: #3ECE75">
    <div class="container">
        <div class="row g-2">
            <div class="col-md-10">
                <div class="row g-2">
                    <div class="col-md-4">
                        <input id="nameInput" type="text" class="form-control border-0" placeholder="Enter Your Name" />
                    </div>
                    <div class="col-md-4">
                        <select id="categoryInput" class="form-select border-0">
                            <option selected>Category</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Customer Service">Customer Service</option>
                            <option value="Human Resource">Human Resource</option>
                            <option value="Project Management">Project Management</option>
                            <option value="Business Development">Business Development</option>
                            <option value="Sales & Communication">Sales & Communication</option>
                            <option value="Teaching & Education">Teaching & Education</option>
                            <option value="Design & Creative">Design & Creative</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select id="locationInput" class="form-select border-0">
                            <option selected>Location</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <button id="searchButton" class="btn btn-dark border-0 w-100">Search</button>
            </div>
        </div>
    </div>
</div>

</div>
<!--end search section-->

<!--start catogory section-->
<div class="section">
   
   <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="jobs.php#first" style="text-decoration: none;">
                            <i class="fa fa-3x fa-mail-bulk  mb-4"></i>
                            <h6 class="mb-3">Marketing</h6>
                            <p class="mb-0">3 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="jobs.php#custom" style="text-decoration: none;">
                            <i class="fa fa-3x fa-headset  mb-4"></i>
                            <h6 class="mb-3">Customer Service</h6>
                            <p class="mb-0">3 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="jobs.php#human" style="text-decoration: none;">
                            <i class="fa fa-3x fa-user-tie  mb-4"></i>
                            <h6 class="mb-3">Human Resource</h6>
                            <p class="mb-0">3 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="jobs.php#prma" style="text-decoration: none;">
                            <i class="fa fa-3x fa-tasks  mb-4"></i>
                            <h6 class="mb-3">Project Management</h6>
                            <p class="mb-0">3 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="jobs.php#bude" style="text-decoration: none;">
                            <i class="fa fa-3x fa-chart-line  mb-4"></i>
                            <h6 class="mb-3">Business Development</h6>
                            <p class="mb-0">3 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="jobs.php#sale" style="text-decoration: none;">
                            <i class="fa fa-3x fa-hands-helping  mb-4"></i>
                            <h6 class="mb-3">Sales & Communication</h6>
                            <p class="mb-0">3 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="jobs.php#teach" style="text-decoration: none;">
                            <i class="fa fa-3x fa-book-reader  mb-4"></i>
                            <h6 class="mb-3">Teaching & Education</h6>
                            <p class="mb-0">3 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="jobs.php#desi" style="text-decoration: none;">
                            <i class="fa fa-3x fa-drafting-compass  mb-4"></i>
                            <h6 class="mb-3">Design & Creative</h6>
                            <p class="mb-0">3 Vacancy</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      

</div>
<!-- Category End -->


<!--about-->
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
                    <img src="../../../images/11.png" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">HNB School Leaver Internship</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">All island</span> | 
                        <i class="fas fa-wallet"></i>
                        <span class="salary">Rs 45 000 - Rs 60 000</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 20 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/mas.png" alt="International     bb" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Markerting Manager MAS Company</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Pallekele, BOI</span> | 
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
                    <img src="../../../images/odel.png" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Business Developer at ODEL PLC</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Kandy, Sri lanka</span> | 
                        <i class="fas fa-wallet"></i>
                        <span class="salary">Rs 65 000</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 19 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/10.png" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Cashier Cargills Food Sity</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Kundasale food sity, Kandy</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 25 000 - 34 000</span>
                    </p>
                    <p class="deadline"><i class="fas fa-calendar-alt"></i> Deadline: 05 Jan, 2025</p>
                </div>
                <div class="job-apply">
                <a href="apply.php" class="btn btn-success">Apply Now</a>
                </div>
            </div>
            <div class="job d-flex align-items-center mb-3 p-3">
                <div class="job-logo mr-3">
                    <img src="../../../images/15.png" alt="TechCom Logo" class="img-fluid" width="50">
                </div>
                <div class="job-details flex-grow-1">
                    <h2 class="mb-1">Junior Executive at SINGER Finance</h2>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="location">Yakkala, Colombo</span> |
                        <i class="fas fa-wallet"></i> 
                        <span class="salary">Rs 70 000 up</span>
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
<!--end-->
<div class="container text-center mt-5"> 
         <a href="jobs.php">
            <button class="login-button">Browse More Jobs</button>
         </a>
 </div>



<!-- Customer Testimonials -->
 <div class="section">
<section class="testimonials">
    <div class="container">
        <div class="section-header">
            <h1 class="title">What Our Clients Say</h1>
        </div>
        <div class="testimonials-content js-testimonials-slider swiper">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide testimonials-item">
                    <div class="info">
                        <img src="../../../images/kav.jpg" alt="Client Image">
                        <div class="text-box">
                            <h3 class="name">Ishani Fernando</h3>
                            <span class="job">Human Resource Manager</span>
                        </div>
                    </div>
                    <p>"This platform made my job search process incredibly smooth. The user interface is intuitive, and the job recommendations align perfectly with my skillset. I secured a fantastic role within just a month of signing up!"</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide testimonials-item">
                    <div class="info">
                        <img src="../../../images/ish.jpg" alt="Client Image">
                        <div class="text-box">
                            <h3 class="name">Kavindi Rathnayake</h3>
                            <span class="job">Marketing Specialist</span>
                        </div>
                    </div>
                    <p>"I appreciate how comprehensive the website is. From updating my resume to tracking my applications, everything is seamlessly integrated. The blog section also provided helpful tips that boosted my confidence during interviews."</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide testimonials-item">
                    <div class="info">
                        <img src="../../../images/tari.jpg" alt="Client Image">
                        <div class="text-box">
                            <h3 class="name">Tharindu D Silva</h3>
                            <span class="job">Graphic Designer</span>
                        </div>
                    </div>
                    <p>"The variety of job listings here is amazing. I found several opportunities that matched my niche expertise. Plus, the ability to connect directly with employers saved me so much time.Thank You."</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide testimonials-item">
                    <div class="info">
                        <img src="../../../images/laki.jpg" alt="Client Image">
                        <div class="text-box">
                            <h3 class="name">Kasun Jayasuriya</h3>
                            <span class="job">Bank Manager</span>
                        </div>
                    </div>
                    <p>"This site stands out because of its advanced filtering options. I was able to narrow down roles based on location, salary, and industry. The profile-building tool also helped me present my skills effectively to employers."</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                
            
                <div class="swiper-slide testimonials-item">
                <a href="commment.php"style="text-decoration: none;">
                    <div class="info">
                        <img src="../../../images/man.jpg" alt="Client Image">
                        <div class="text-box">
                        <h3 class="name" style="color:;">Add Your Comment +</h3>
                            <span class="job"></span>
                        </div>
                    </div>
                    <p >"This website is amazing! It's easy to use, and the job listings perfectly match my skills. I quickly found a great opportunity, and the entire process was so smooth. Highly recommend it to anyone job hunting!"</p>
                    <div class="rating">
                         <i class="fa fa-star" style="color:green;"></i>
                         <i class="fa fa-star" style="color:green;"></i>
                         <i class="fa fa-star" style="color:green;"></i>
                         <i class="fa fa-star" style="color:green;"></i>

                    </div>
                   </a>
                </div>
                
   
            </div>
            <div class="swiper-pagination js-testimonials-pagination"></div>
        </div>
    </div>
</section>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.js-testimonials-slider', {
        grabCursor: true,
        spaceBetween: 30,
        pagination: {
            el: '.js-testimonials-pagination',
            clickable: true,
        },
        breakpoints: {
            767: {
                slidesPerView: 2,
            },
        },
    });
</script>
 <!--end-->

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
<script src="../../../js/script.js"></script>



</body>
</html>