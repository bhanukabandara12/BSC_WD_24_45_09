<?php
include '../../functions/connect_db.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jobName = htmlspecialchars($_POST['jobName']);
    $location = htmlspecialchars($_POST['location']);
    $salary = htmlspecialchars($_POST['salary']);
    $dedline = htmlspecialchars($_POST['dedline']);

   
    $target_dir = "Imageuploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true); 
    }

    if (isset($_FILES['companyLogo']) && $_FILES['companyLogo']['error'] == UPLOAD_ERR_OK) {
        $file_name = basename($_FILES["companyLogo"]["name"]);
        $target_file = $target_dir . preg_replace("/[^a-zA-Z0-9.-]/", "_", $file_name);
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($file_type, $allowed_types)) {
            die("Error: Only image files (JPG, JPEG, PNG, GIF) are allowed.");
        }

        if (move_uploaded_file($_FILES["companyLogo"]["tmp_name"], $target_file)) {
            $stmt = $con->prepare("INSERT INTO job_post (jobName, location, salary, dedline, image_path) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $jobName, $location, $salary, $dedline, $target_file);

            if ($stmt->execute()) {
                echo "<script>alert('Job application submitted successfully!');</script>";
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            echo "Failed to upload company logo.";
        }
    } else {
        echo "No file uploaded or there was an upload error.";
    }
}
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

<div class="section">
<div class="container-fluid col-md-6 form-outline">
  <h1 class="text-center" style="font-weight: bold;">Post a Your Job</h1>

  <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
            <i class="fas fa-briefcase"></i>
            <label for="jobName">Job Name</label>
            <input type="text" class="form-control" id="jobName" name="jobName" required>
        </div>
        <div class="form-group">
            <i class="fas fa-map-marker-alt"></i>
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" placeholder="Enter your location" name="location" required>
        </div>
        <div class="form-group">
            <i class="fas fa-phone-alt"></i>
            <label for="contact">Contact</label>
            <input type="number" class="form-control" id="contact" placeholder="Enter contact number" name="contact" required>
       </div>

        <div class="form-group">
            <i class="fas fa-dollar-sign"></i>
            <label for="salary">Salary</label>
            <input type="text" class="form-control" id="salary" placeholder="Enter salary" name="salary" required>
        </div>
        <div class="form-group">
            <i class="fas fa-calendar-alt"></i>
            <label for="deadline">Deadline</label>
            <input type="date" class="form-control" id="deadline" name="dedline" required>
        </div>
        <div class="form-group">
            <i class="fas fa-image"></i>
            <label for="companyLogo">Company Logo</label>
            <input type="file" class="form-control" id="companyLogo" accept="image/*" name="companyLogo" required>
        </div>
      <br>
        <button type="submit" class="btn btn-primary w-100 py-2">Submit</button>
    </form>
  </div>

<!--end-->
<br><br><br><br>
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