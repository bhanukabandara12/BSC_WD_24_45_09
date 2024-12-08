<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobEntry</title>
    <link rel="stylesheet" href="../../../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/nav.css">
    <link rel="stylesheet" href="../../../css/contact.css">
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
<!--contract form-->
<div class="section">
<div class="container-fluid col-md-6 form-outline">
  <h1 class="text-center" style="font-weight: bold;">Apply a Job</h1>

  <form>
  <div class="form-group">
           <i class="fas fa-user-tag"></i>
           <label>Title</label>
           <div class="form-check">
           <input type="radio" class="form-check-input" id="mr" name="title" value="Mr." required>
           <label class="form-check-label" for="mr">Mr.</label>
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="ms" name="title" value="Ms." required>
        <label class="form-check-label" for="ms">Ms.</label>
    </div>
</div>

      <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" id="firstName" required>
      </div>
      <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" id="lastName" required>
      </div>
      <div class="form-group">
        <i class="fas fa-calendar-alt"></i>
        <label for="bate">Age</label>
        <input type="number" class="form-control" id="age" placeholder="Enter your age" min="0" max="120" required>
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
          <i class="fas fa-file-upload"></i>
          <label for="cv">Upload CV</label>
          <input type="file" class="form-control" id="cv" accept=".pdf,.doc,.docx" required>
        </div>

      <div class="form-group">
          <i class="fas fa-comment"></i>
          <label for="message">Message to Hiring Manager</label>
          <textarea class="form-control" id="message" rows="4" placeholder="Message"></textarea>
      </div>
      <div class="form-group">
         <i class="fas fa-check-square"></i>
         <label for="terms">Agree to Terms</label>
            <div class="form-check">
        <input type="checkbox" class="form-check-input" id="terms" required>
        <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
    </div>
</div>

      <br><br>
      <input class="btn btn-primary w-100 py-2" type="submit" value="Submit">

  </form>

</div>
<!--end of contact form-->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="../../../js/script.js"></script>

</body>
</html>