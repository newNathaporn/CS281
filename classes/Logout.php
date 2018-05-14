<?php
session_start();
unset($_SESSION['id_user']);
unset($_SESSION["url"]);
session_destroy();
header('location:../index.php');
?>

