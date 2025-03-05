<?php
session_start();
unset($_SESSION["cyber"]); // Hapus session spesifik
unset($_SESSION["eng"]); // Hapus session spesifik
unset($_SESSION["math"]); // Hapus session spesifik
unset($_SESSION["energy"]); // Hapus session spesifik
unset($_SESSION["AI"]); // Hapus session spesifik
unset($_SESSION["biotech"]); // Hapus session spesifik
unset($_SESSION["space"]); // Hapus session spesifik
header("Location: ../index3.php"); // Redirect setelah logout
exit();
?>
