<?php

include '../../../functions/connect_db.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../../../../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <style>
        body {
            background-color: lightblue;
        }
    </style>
</head>
<body>
         <!--Nav Bar-->
 <div class="section">        
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" href="admin.php">JobEntry Admin</a>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">JobEntry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="admin.php">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="jobApp.php">Job Applications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="comment.php">Comments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="contact.php">Contact</a>
          </li>
        </ul>
       
      </div>
    </div>
    <a href="Postjob.php" class = "login-button" >Post a Job</a>
    <button class="navbar-toggler pe-8" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
</div>
<!--Nav Bar End-->

<!--user management-->
<br><br><br><br><br>
<div class="section">
<div class="container">
<h1 class="text-center" style="font-weight: bold;">Job Applications</h1><br>
 <button class="btn btn-success my-3">
    <a href="adminOper/jobApplicationAdd.php" class="text-light" style="text-decoration: none;">Add Application</a>
</button>
<table class="table table-striped text-center" style="border: 1px solid black;">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Mobile Num</th>
      <th scope="col">Email</th>
      <th scope="col">Cv</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>



    </tr>
  </thead>
  <tbody>

  <!--get data  to table-->
<?php

$sql = "SELECT * FROM job_applications";
$result = mysqli_query($con,$sql);
if ($result) {
      while($row=mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $title = $row['title'];
        $fname = $row['first_name'];
        $lname = $row['last_name'];
        $age = $row['age'];
        $mobile = $row['contact_number'];
        $email = $row['email'];
        $cv = $row['cv'];
        $message = $row['message'];


        echo '
            <tr>
      <th scope="row">'.$id.'</th>
                    <td>'.$title.'</td>
                    <td>'.$fname.'</td>
                    <td>'.$lname.'</td>
                    <td>'.$age.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$email.'</td>
                    <td>'.$cv.'</td>
                    <td>'.$message.'</td>
                    <td>

                     <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=jobentry&table=job_applications" class="line-dark">
                      <i class="fas fa-edit" style="color: green;"></i>
                    </a>
                    

                    <a href="adminOper/appliDele.php?
                    deleteid='.$id.'" class="line-dark"> <i class="fas fa-trash" style="color: black;"></i>
                    </a>

                    


                    </td>
            </tr>';
      }
    }

  
?>
  </tbody>
</table>
</div>
</div>
<!--end user manage-->



<script src="../../../../js/jobAppli.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="../../../../js/script.js"></script>

</body>
</html>