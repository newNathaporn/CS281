<?php
include "../classes/Connection.php";
include "../classes/Member.php";
include "../classes/Login.php";
session_start();
$user = new Login($_POST['uid'], $_POST['pwd']);
$num = $user->checkuser($conn);
if ($num == -1) {
    echo "<script>alert('username และ password ของท่านไม่ถูกต้องกรุณากรอกใหม่ด้วยครับ/ค่ะ'); window.location='../index.php'</script>";
    exit();
} else {
    $arr = Member::insertuser($conn, $num);
    $_SESSION["id_user"] = $arr->getidUser();
    $m = $_SESSION["url"];
    echo "<script>alert('Welcome " . $arr->getfirstname() . " " . $arr->getlastname() . "'); window.location='" . $m . "' </script>";
}
?>