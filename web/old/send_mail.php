<?php
  include "classes/Connection.php" ;
// $connect = mysql_connect("localhost", "root", "", "cs281") or die("ติดต่อ MySQL ไม่ได้"); // เก็บการเชื่อมต่อไว้ที่ตัวแปร $connect
// mysql_select_db("user", $connect) or die("ติดต่อฐานข้อมูลไม่ได้"); // ทำการติดต่อฐานข้อมูล

$sql = "SELECT email FROM user "; // สร้างคำสั่ง SQL เก็บไว้ในตัวแปรชื่อ $SQLCom
$query = $conn->query($sql); // ทำการคิวรี่
  //  $mailto = $_POST['Email'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 1;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "longdomdu.so@gmail.com";
   $mail ->Password = "oo123456789";
   $mail ->SetFrom("longdomdu.so@gmail.com");
   $mail ->Subject = $mailSub; //"+++Promotion4U+++";
   $mail ->Body = $mailMsg;/*"⭐️ พิเศษ!! สำหรับลูกค้า Longdomdu' sor  เพียงซื้อสินค้า ครบ 499 บาท ฟรี❗❗ ค่าจัดส่งสินค้า ตั้งแต่วันนี้เป็นต้นไปหรือจนกว่าสินค้าจะหมด (สินค้ามีจำนวนจำกัด) ช้าหมดอดนะออเจ้า ⭐️
                  คลิกด่วน ▶▶ http://localhost/web/ ◀◀  ";*/

   while($rs = mysqli_fetch_array($query))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
   {
      $mail ->AddAddress($rs['email']);
   }

   //$mail ->AddAddress($sql);


   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }

   header("location:index.php");
