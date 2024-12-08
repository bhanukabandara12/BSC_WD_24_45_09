<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobEntry</title>
    <link rel="stylesheet" href="../../../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/nav.css">
    <link rel="stylesheet" href="../../../css/contact.css">
    <link rel="stylesheet" href="../../../css/home.css">
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

<br><br><br><br><br>

<!--job post application-->


<div class="container-fluid col-md-6 form-outline">
  <h1 class="text-center" style="font-weight: bold;">Post a Your Job</h1>

  <form>
      <div class="form-group">
          <i class="fas fa-tasks"></i>
          <label for="requestType">Job Category</label>
          <select class="form-control" id="requestType" required>
              <option value="">Marketing</option>
              <option>Customer Service</option>
              <option>Human Resource</option>
              <option>Project Management</option>
              <option>Business Development</option>
              <option>Sales & Communication</option>
              <option>Teaching & Education</option>
              <option>Design & Creative</option>
          </select>
      </div>
      <div class="form-group">
          <i class="fas fa-briefcase"></i>
          <label for="firstName">Job Name</label>
          <input type="text" class="form-control" id="firstName" required>
      </div>
      <div class="form-group">
          <i class="fas fa-building"></i>
          <label for="lastName">Company Name</label>
          <input type="text" class="form-control" id="lastName" required>
      </div>
      <div class="form-group">
          <i class="fas fa-phone"></i>
          <label for="contactNumber">Contact Number</label>
          <input type="number" class="form-control" id="contactNumber" required>
      </div>
      <div class="form-group">
          <i class="fas fa-envelope"></i>
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" required>
      </div>
      <div class="form-group">
          <i class="fas fa-map-marker-alt"></i>
         <label for="location">Location</label>
         <input type="text" class="form-control" id="location" placeholder="Enter your location" required>
      </div>
      <div class="form-group">
          <i class="fas fa-dollar-sign"></i>
          <label for="salary">Salary</label>
           <input type="text" class="form-control" id="salary" placeholder="Enter salary" min="0" required>
       </div>
       <div class="form-group">
           <i class="fas fa-calendar-alt"></i>
           <label for="deadline">Deadline</label>
           <input type="date" class="form-control" id="deadline" required>
       </div>

      
      <div class="form-group">
          <i class="fas fa-comment"></i>
          <label for="message">Write other infomation</label>
          <textarea class="form-control" id="message" rows="4" placeholder="Message"></textarea>
      </div>
      <br><br>
      <input class="btn btn-primary w-100 py-2" type="submit" value="Submit">

  </form>


<!--end-->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="../../../js/script.js"></script>

</body>
</html>