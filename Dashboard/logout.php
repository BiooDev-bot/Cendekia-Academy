<?php 
session_start();
session_unset();
session_destroy();

header("Location: ../Login/login-v2.php");
exit;
?>