<?php
include '../../../../functions/connect_db.php';


if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM comments WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $comment = $result->fetch_assoc();

    if (!$comment) {
        die("Comment not found.");
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['_method']) && $_POST['_method'] == 'PUT') {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $target_file = $comment['photo']; 
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
        $file_name = basename($_FILES["photo"]["name"]);
        $target_file = "uploads/" . preg_replace("/[^a-zA-Z0-9.-]/", "_", $file_name);
        move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
    }

    $update_sql = "UPDATE comments SET name = ?, position = ?, email = ?, photo = ?, message = ? WHERE id = ?";
    $stmt = $con->prepare($update_sql);
    $stmt->bind_param("sssssi", $name, $position, $email, $target_file, $message, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Comment updated successfully!')</script>";
    } else {
        echo "Error updating comment: " . $stmt->error;
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

<div class="container col-md-6">
    <h1 class="text-center" style="font-weight: bold;">Edit Comment</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        
        <div class="form-group">
            <i class="fas fa-user"></i>
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $comment['name'] ?>" required>
        </div>
        
        <div class="form-group">
            <i class="fas fa-user-tag"></i>
            <label for="position">Position</label>
            <input type="text" class="form-control" id="position" name="position" value="<?= $comment['position'] ?>" required>
        </div>
        
        <div class="form-group">
            <i class="fas fa-envelope"></i>
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $comment['email'] ?>" required>
        </div>

        <div class="form-group">
            <i class="fas fa-image"></i>
            <label for="photo">Picture</label><br>
            <img src="<?= $comment['photo'] ?>" alt="Current Picture" style="width: 50px; height: 50px;"><br><br>
            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
        </div>

        <div class="form-group">
            <i class="fas fa-comment"></i>
            <label for="message">Message</label><br>
            <textarea class="form-control" id="message" name="message" required><?= $comment['message'] ?></textarea>
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary w-100">Update Comment</button>
    </form>
</div>

</body>
</html>
