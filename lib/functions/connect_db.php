<?php

//Use this connection for apply.php and connect.php
// Database connection
$con = new mysqli('localhost', 'root', '', 'jobentry');

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
