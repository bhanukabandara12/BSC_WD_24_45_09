<?php
include("../../../../functions/connect_db.php");


if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];


  
    $stmt = $con->prepare("SELECT * FROM job_post WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $job = $result->fetch_assoc();

    // Check if job exists
    if (!$job) {
        die("Job not found.");
    }
} else {
    die("No job ID provided.");
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jobName = htmlspecialchars($_POST['jobName']);
    $location = htmlspecialchars($_POST['location']);
    $salary = htmlspecialchars($_POST['salary']);
    $dedline = htmlspecialchars($_POST['dedline']);

    $target_dir = "Imageuploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    $target_file = $job['image_path']; 

    
    if (isset($_FILES['companyLogo']) && $_FILES['companyLogo']['error'] == UPLOAD_ERR_OK) {
        $file_name = basename($_FILES["companyLogo"]["name"]);
        $target_file = $target_dir . preg_replace("/[^a-zA-Z0-9.-]/", "_", $file_name);
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($file_type, $allowed_types)) {
            die("Error: Only image files (JPG, JPEG, PNG, GIF) are allowed.");
        }

        if (!move_uploaded_file($_FILES["companyLogo"]["tmp_name"], $target_file)) {
            die("Failed to upload the new logo.");
        }
    }


    $stmt = $con->prepare("UPDATE job_post SET jobName = ?, location = ?, salary = ?, dedline = ?, image_path = ? WHERE id = ?");
    $stmt->bind_param("sssssi", $jobName, $location, $salary, $dedline, $target_file, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Job post updated successfully!')</script>";
    } else {
        echo "Error updating job post: " . $stmt->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobEntry Admin</title>
    <link rel="stylesheet" href="../../../../../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../../css/nav.css">
    <!--<link rel="stylesheet" href="../../../../../css/contact.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    
    <style>
        body {
            background-color: lightblue;
        }
    </style>
</head>
<body>

<!--nav bar Start-->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" href="../admin.php">JobEntry Admin</a>
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
          <li class="nav-item"><a class="nav-link" href="../admin.php">User</a></li>
          <li class="nav-item"><a class="nav-link" href="../jobApp.php">Job Applications</a></li>
          <li class="nav-item"><a class="nav-link" href="../comment.php">Comments</a></li>
          <li class="nav-item"><a class="nav-link" href="../contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
    <a href="../PostJob.php" class="login-button">Post a Job</a>
  </div>
</nav>
<!--nav bar end-->
<br><br><br><br><br>


<!--Update form-->


<div class="container col-md-6">
<h1 class="text-center" style="font-weight: bold;">Update a Job</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <i class="fas fa-briefcase"></i>
            <label for="jobName">Job Name</label>
            <input type="text" class="form-control" id="jobName" name="jobName" value="<?= $job['jobName'] ?>" required>
        </div>
        <div class="form-group">
            <i class="fas fa-map-marker-alt"></i> 
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="<?= $job['location'] ?>" required>
        </div>
        <div class="form-group">
            <i class="fas fa-dollar-sign"></i>
            <label for="salary">Salary</label>
            <input type="text" class="form-control" id="salary" name="salary" value="<?= $job['salary'] ?>" required>
        </div>
        <div class="form-group">
            <i class="fas fa-calendar-alt"></i>
            <label for="dedline">Deadline</label>
            <input type="date" class="form-control" id="dedline" name="dedline" value="<?= $job['dedline'] ?>" required>
        </div>
        <div class="form-group">
            <i class="fas fa-image"></i>
            <label for="companyLogo">Company Logo</label><br>
            <img src="<?= $job['image_path'] ?>" alt="Current Logo" style="width: 50px; height: 50px;"><br><br>
            <input type="file" class="form-control" id="companyLogo" name="companyLogo" accept="image/*">
        </div>
        <br>
        <button type="submit" class="btn btn-primary w-100">Update</button>
    </form>
</div>

<br><br><br>
</body>
</html>
