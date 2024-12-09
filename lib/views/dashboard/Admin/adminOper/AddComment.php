<?php
include("../../../../functions/connect_db.php");

$name = $position = $email = $message = $photoFileName = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $photoTmpName = $_FILES['photo']['tmp_name'];
        $photoFileName = basename($_FILES['photo']['name']);
        $uploadDir = "uploads/photos/";
        $uploadFilePath = $uploadDir . $photoFileName;

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (move_uploaded_file($photoTmpName, $uploadFilePath)) {
            // File uploaded successfully
        } else {
            echo "Error uploading photo.";
            exit();
        }
    } else {
        echo "Photo upload error.";
        exit();
    }

    $sql = "INSERT INTO comments (name, position, email, photo, message) 
            VALUES ('$name', '$position', '$email', '$photoFileName', '$message')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Comment added successfully');</script>";
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
            <a class="nav-link mx-lg-2" href="#">Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="../comment.php">Comment</a>
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
  <h1 class="text-center" style="font-weight: bold;">Add a Your Comment</h1>

  <form method = "post" action="AddComment.php" enctype="multipart/form-data">
      <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="firstName">Your Name</label>
          <input type="text" class="form-control" id="firstName" name = "name" required>
      </div>
       
      <div class="form-group">
          <i class="fas fa-user-tie"></i>
          <label for="firstName">Your Position</label>
          <input type="text" class="form-control" id="firstName" name = "position" required>
      </div>
     

      <div class="form-group">
          <i class="fas fa-envelope"></i>
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name = "email" required>
      </div>
      
      <div class="form-group">
        <i class="fas fa-camera"></i>
        <label for="uploadPhoto">Upload Your Photo</label>
        <input type="file" class="form-control" id="uploadPhoto" name = "photo"accept="image/*" required>
      </div>


      <div class="form-group">
          <i class="fas fa-comment"></i>
          <label for="message">Comment</label>
          <textarea class="form-control" id="message" rows="4" placeholder="Message" name = "message"></textarea>
      </div>
      <br><br>
      <input class="btn btn-primary w-100 py-2" type="submit" value="Submit">

  </form>
</div>
<br><br>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="../../../js/script.js"></script>

</body>
</html>