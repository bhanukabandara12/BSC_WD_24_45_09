<?php include ('../../../../functions/connect_db.php');?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query =  "SELECT * FROM 'job_applications' WHERE 'id' = '$id'";
    $result = mysqli_error($connection,$query);

    if(!$result){
        die("query Failed".mysqli_error());
    }
    else{
        $row = mysqli_fetch_assoc($result);
        
    }
}

if(isset($_POST['update'])){
    $title = $_POST['title'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $age = $_POST['age'];
    $mobile = $_POST['contact_number'];
    $email = $_POST['email'];
    $cv = $_POST['cv'];
    $message = $_POST['message'];

    $query = "UPDATE 'job_applications' SET 'title' = '$title',
    'first_name' = '  $fname', 'last_name' = ' $lname','age' = '$mobile',
    'contact_number' = ' $mobile ','email' = ' $email','cv'='$cv ','message'=' $message' WHERE 'id' = $id";
     
     if(!$result){
        die("query Failed".mysqli_error());
    }
    else {
        header('../jobApp.php?update_msg = You have successfully updated');
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="section">
<div class="container-fluid col-md-6 form-outline">
  <h1 class="text-center" style="font-weight: bold;">Apply a Job</h1>

  <form method="post" action="UpdateApplica.php?id_new=<?php echo $id;?>" enctype="multipart/form-data">
  <div class="form-group">
           <i class="fas fa-user-tag"></i>
           <label>Title</label>
           <div class="form-check form-check-inline">
           <input type="radio" class="form-check-input" id="mr" name="title" value="<?php echo['title']?>">
           <label class="form-check-label" for="mr">Mr.</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" id="ms" name="title" value="<?php echo['title']?>">
        <label class="form-check-label" for="ms">Ms.</label>
    </div>
</div>

      <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" id="firstName"  name="firstName" value = "<?php echo['first_name']?>">
      </div>
      <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" id="lastName" name="lastName" value = "<?php echo['last_name']?>">
      </div>
      <div class="form-group">
        <i class="fas fa-calendar-alt"></i>
        <label for="bate">Age</label>
        <input type="number" class="form-control" id="age"  name="age" min="0" max="120" value = "<?php echo['age']?>">
     </div>

      <div class="form-group">
          <i class="fas fa-phone"></i>
          <label for="contactNumber">Contact Number</label>
          <input type="number" class="form-control" id="contactNumber"  name="contactNumber" value = "<?php echo['contact_number']?>">
      </div>
      <div class="form-group">
          <i class="fas fa-envelope"></i>
          <label for="email">Email</label>
          <input type="email" class="form-control" name = "email" id="email" value = "<?php echo['email']?>">
      </div>
      <div class="form-group">
          <i class="fas fa-file-upload"></i>
          <label for="cv">Upload CV</label>
          <input type="file" class="form-control" id="cv" name="cv" accept=".pdf,.doc,.docx" value = "<?php echo['cv']?>">
        </div>

      <div class="form-group">
          <i class="fas fa-comment"></i>
          <label for="message">Message to Hiring Manager</label>
          <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message" value = "<?php echo['message']?>"></textarea>
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
      <input class="btn btn-primary w-100 py-2" type="submit" value="Submit" name = "update">

  </form>

</div>

</body>
</html>