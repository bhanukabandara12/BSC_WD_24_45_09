<?php

include '../../../../functions/connect_db.php';

if (isset($_GET['deleteid'])) {
    $id = mysqli_real_escape_string($con, $_GET['deleteid']);

    $sql = "DELETE FROM comments WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);
    $result = $stmt->execute();

    if ($result) {
        echo "<script>
                alert('Delete Successful');
                window.location.href = '../comment.php'; 
              </script>";
    } else {
        echo "<script>
                alert('Error: " . mysqli_error($con) . "');
                window.location.href = '../comment.php'; 
              </script>";
    }
}

?>
