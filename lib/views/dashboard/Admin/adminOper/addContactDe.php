<?php
include("../../../../functions/connect_db.php");

$requestType = $firstName = $lastName = $contactNumber = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and fetch form data
    $requestType = mysqli_real_escape_string($con, $_POST['RequestType']);
    $firstName = mysqli_real_escape_string($con, $_POST['Fname']);
    $lastName = mysqli_real_escape_string($con, $_POST['Lname']);
    $contactNumber = mysqli_real_escape_string($con, $_POST['Contact']);
    $email = mysqli_real_escape_string($con, $_POST['Email']);
    $message = mysqli_real_escape_string($con, $_POST['Message']);

    // SQL to insert form data into the database
    $sql = "INSERT INTO contact_us (RequestType, Fname, Lname, Contact, email, Message) 
            VALUES ('$requestType', '$firstName', '$lastName', '$contactNumber', '$email', '$message')";

    // Execute the query and handle the result
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Successfully submitted Your Form');</script>";
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
    <title>JobEntry Admin</title>
    <link rel="stylesheet" href="../../../../../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../../css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

</head>
<body style="background-color: lightblue;">

        <!--Nav Bar-->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" href="../admin.php">JobEntry Admin</a>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">JobEntry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../admin.php">User</a>

          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="../jobApp.php">Job Applications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="../comment.php">Comments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="../contact.php">Contact</a>
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
  <h1 class="text-center" style="font-weight: bold;">Add Contact</h1>

  <form action ="addContactDe.php" method = "post">
      <div class="form-group">
          <i class="fas fa-tasks"></i>
          <label for="requestType">Request Type</label>
          <select class="form-control" id="requestType" name="RequestType" required>
              <option>Job interviwe problem</option>
              <option>Candidate Application Reviews</option>
              <option>Job Posting Assistance</option>
              <option>Other</option>
          </select>
      </div>
      <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" name = "Fname" id="firstName" required>
      </div>
      <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control"  name = "Lname" id="lastName" required>
      </div>
      <div class="form-group">
          <i class="fas fa-phone"></i>
          <label for="contactNumber">Contact Number</label>
          <input type="number" class="form-control" name = "Contact" id="contactNumber" required>
      </div>
      <div class="form-group">
          <i class="fas fa-envelope"></i>
          <label for="email">Email</label>
          <input type="email" class="form-control" name = "Email" id="email" required>
      </div>
      
      <div class="form-group">
          <i class="fas fa-comment"></i>
          <label for="message">Message</label>
          <textarea class="form-control" name = "Message" id="message" rows="4" placeholder="Message" required></textarea>
      </div>
      <br><br>
      <input class="btn btn-primary w-100 py-2" type="submit" value="Submit">

  </form>
</div>
<!--end of contact form-->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>