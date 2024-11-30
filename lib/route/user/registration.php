<?php

include_once('../../functions/userFunction.php');




$result = userRegistration($_POST['userName'],$_POST['userLast'],
$_POST['userEmail'],$_POST['userPass']);

echo($result);






?>