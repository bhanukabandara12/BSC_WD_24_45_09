<?php
include("../../functions/connect_db.php");

$title = $firstName = $lastName = $age = $contactNumber = $email = $message = $cvFileName = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $age = (int)$_POST['age'];
    $contactNumber = mysqli_real_escape_string($con, $_POST['contactNumber']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    if (isset($_FILES['cv']) && $_FILES['cv']['error'] === UPLOAD_ERR_OK) {
        $cvTmpName = $_FILES['cv']['tmp_name'];
        $cvFileName = basename($_FILES['cv']['name']);
        $uploadDir = "uploads/";
        $uploadFilePath = $uploadDir . $cvFileName;

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (move_uploaded_file($cvTmpName, $uploadFilePath)) {
        } else {
            echo "Error uploading CV.";
            exit();
        }
    } else {
        echo "CV upload error.";
        exit();
    }

    $sql = "INSERT INTO job_applications (title, first_name, last_name, age, contact_number, email, cv, message) 
            VALUES ('$title', '$firstName', '$lastName', $age, '$contactNumber', '$email', '$cvFileName', '$message')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Successfully data added');</script>";

    } else {
        echo "Error: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>

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


<!--nav bar Start-->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" href="user.php">JobEntry</a>
    <button class="navbar-toggler pe-8" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">JobEntry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item"><a class="nav-link" href="user.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="jobs.php">Jobs</a></li>
          <li class="nav-item"><a class="nav-link" href="jobCt.php">Job Category</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
    <a href="jbpost.php" class="login-button">Post a Job</a>
  </div>
</nav>
<!--nav bar end-->
<br><br><br><br><br>
<!--apply form-->

<div class="section">
<div class="container-fluid col-md-6 form-outline">
  <h1 class="text-center" style="font-weight: bold;">Apply a Job</h1>

  <form method="post" action="apply.php" enctype="multipart/form-data">
  <div class="form-group">
           <i class="fas fa-user-tag"></i>
           <label>Title</label>
           <div class="form-check form-check-inline">
           <input type="radio" class="form-check-input" id="mr" name="title" value="Mr." required>
           <label class="form-check-label" for="mr">Mr.</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" id="ms" name="title" value="Ms." required>
        <label class="form-check-label" for="ms">Ms.</label>
    </div>
</div>

      <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" id="firstName"  name="firstName" required>
      </div>
      <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" id="lastName" name="lastName" required>
      </div>
      <div class="form-group">
        <i class="fas fa-calendar-alt"></i>
        <label for="bate">Age</label>
        <input type="number" class="form-control" id="age"  name="age" min="0" max="120" required>
     </div>

      <div class="form-group">
          <i class="fas fa-phone"></i>
          <label for="contactNumber">Contact Number</label>
          <input type="number" class="form-control" id="contactNumber"  name="contactNumber" required>
      </div>
      <div class="form-group">
          <i class="fas fa-envelope"></i>
          <label for="email">Email</label>
          <input type="email" class="form-control" name = "email" id="email" required>
      </div>
      <div class="form-group">
          <i class="fas fa-file-upload"></i>
          <label for="cv">Upload CV</label>
          <input type="file" class="form-control" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
        </div>

      <div class="form-group">
          <i class="fas fa-comment"></i>
          <label for="message">Message to Hiring Manager</label>
          <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message"></textarea>
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../../js/script.js"></script>

</body>
</html>
