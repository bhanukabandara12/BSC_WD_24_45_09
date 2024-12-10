<?php

include '../../../../functions/connect_db.php';

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
}

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $contactnumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    // Check if cv is set before assigning it
    $cv = isset($_FILES['cv']) ? $_FILES['cv']['name'] : null;

    // Assuming you want to upload the file
    if ($cv) {
        // Handle file upload logic here (move the file to your server)
        $targetDirectory = "uploads/"; // Define your upload directory
        $targetFile = $targetDirectory . basename($_FILES["cv"]["name"]);
        move_uploaded_file($_FILES["cv"]["tmp_name"], $targetFile);
    }
    
    $sql ="UPDATE 'job_applications' set id ='$id', title ='$title',firstName ='$firstName',lastName ='$lastName',age='$age',
    contactNumber ='$contactnumber',email='$email',message ='$message',cv ='$cv'";


    //$sql = "INSERT INTO job_applications (title, first_name, last_name, age, contact_number, email, message, cv)
           // VALUES('$title', '$firstName', '$lastName', '$age', '$contactnumber', '$email', '$message', '$cv')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Data updated successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../../../css/bootstrap/css/bootstrap.min.css">
    
    <style>
        body {
            background-color: lightblue;
        }
    </style>
</head>
<body>
    



<br><br><br><br><br>
<!--apply form-->

<div class="section">
<div class="container-fluid col-md-6 form-outline">
  <h1 class="text-center" style="font-weight: bold;">Apply a Job</h1>

  <form method="post" action="appliUpda.php" enctype="multipart/form-data">
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
      <input class="btn btn-primary w-100 py-2" type="submit" name = "submit" value="Update">

  </form>

</div>


<!--end-->
</body>
</html>