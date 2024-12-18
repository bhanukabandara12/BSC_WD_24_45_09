<?php
include("../../../../functions/connect_db.php");

$contact = null;  

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

    
    $stmt = $con->prepare("SELECT * FROM contact_us WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    
    if ($result->num_rows > 0) {
        $contact = $result->fetch_assoc();
    } else {
        die("Record not found.");
    }
} 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $requestType = htmlspecialchars($_POST['RequestType']);
    $firstName = htmlspecialchars($_POST['Fname']);
    $lastName = htmlspecialchars($_POST['Lname']);
    $contactNumber = htmlspecialchars($_POST['Contact']);
    $email = htmlspecialchars($_POST['Email']);
    $message = htmlspecialchars($_POST['Message']);

    
    $stmt = $con->prepare("UPDATE contact_us SET RequestType = ?, Fname = ?, Lname = ?, Contact = ?, email = ?, Message = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $requestType, $firstName, $lastName, $contactNumber, $email, $message, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Form updated successfully!'); window.location.href='EditContact.php';</script>";
    } else {
        echo "Error updating record: " . $stmt->error;
    }
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Contact</title>
    <link rel="stylesheet" href="../../../../../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../../css/nav.css">
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
<h1 class="text-center" style="font-weight: bold;">Update Contact</h1>


    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <i class="fas fa-tasks"></i>
            <label for="requestType">Request Type</label>
            <select class="form-control" id="requestType" name="RequestType" required>
                <option value="Job Interview Problem" <?= $contact && $contact['RequestType'] == 'Job Interview Problem' ? 'selected' : '' ?>>Job Interview Problem</option>
                <option value="Candidate Application Reviews" <?= $contact && $contact['RequestType'] == 'Candidate Application Reviews' ? 'selected' : '' ?>>Candidate Application Reviews</option>
                <option value="Job Posting Assistance" <?= $contact && $contact['RequestType'] == 'Job Posting Assistance' ? 'selected' : '' ?>>Job Posting Assistance</option>
                <option value="Other" <?= $contact && $contact['RequestType'] == 'Other' ? 'selected' : '' ?>>Other</option>
            </select>
        </div>
        <div class="form-group">
            <i class="fas fa-user"></i>
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="Fname" id="firstName" value="<?= $contact ? $contact['Fname'] : '' ?>" required>
        </div>
        <div class="form-group">
            <i class="fas fa-user"></i>
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="Lname" id="lastName" value="<?= $contact ? $contact['Lname'] : '' ?>" required>
        </div>
        <div class="form-group">
            <i class="fas fa-phone"></i>
            <label for="contactNumber">Contact Number</label>
            <input type="number" class="form-control" name="Contact" id="contactNumber" value="<?= $contact ? $contact['Contact'] : '' ?>" required>
        </div>
        <div class="form-group">
            <i class="fas fa-envelope"></i>
            <label for="email">Email</label>
            <input type="email" class="form-control" name="Email" id="email" value="<?= $contact ? $contact['email'] : '' ?>" required>
        </div>
        <div class="form-group">
            <i class="fas fa-comment"></i>
            <label for="message">Message</label>
            <textarea class="form-control" name="Message" id="message" rows="4" required><?= $contact ? $contact['Message'] : '' ?></textarea>
        </div>

        <input type="hidden" name="id" value="<?= $contact ? $contact['id'] : '' ?>">

        <br><br>
        <input class="btn btn-primary w-100 py-2" type="submit" value="Update">
    </form>
</div>

<br><br><br>
</body>
</html>
