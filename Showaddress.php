<?php 
include "classes/Connection.php";
include "classes/Member.php";
session_start();
if ($_GET['num'] == -1) {
	echo "<script>alert('กรุณาใส่ username และ password ของท่านด้วยครับ/ค่ะ'); window.location='../web/index.php'</script>";
	exit();
} else if ($_GET['num'] == null) {
	echo "<script>alert('ท่านกดผิดครับ/ค่ะ'); window.location='../web/index.php'</script>";
	exit();
} else if ($_GET['num'] == -2) {
	echo "<script>alert('ท่านยังไม่มีสินค้าในตะกร้าครับ/ค่ะ'); window.location='../web/index.php'</script>";
	exit();
}

if (isset($_SESSION['id_user'])) {
	$member = Member::insertuser($conn, $_SESSION['id_user']);
} else {
	$member = null;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Information for shipping product</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
	<div id="content">
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login50">
						<p class="login100-form-title" style="color:#AFA" > INFORMATION </p>
						<p class="login100-form-title " style="color:#AFA">For Shipping Product</p>
					
					<form class="login100-form validate-form" action="Control/Add.php?id=updateaddress" method="post" enctype="multipart/form-data">
						<div class="wrap-input100 validate-input" data-validate="FirstName is required">
							<font size="4" color="#AFA">Firstname</font>
							<input class="input100" type="text" name="name" value="<?php echo $member->getfirstname() ?>">
						</div>

						<div class="wrap-input100 validate-input" data-validate="LastNamee is required">
						<font size="4" color="#AFA">Lastname</font>
							<input class="input100" type="text" name="lastname" value="<?php echo $member->getlastname() ?>">
							<span class="focus-input100"></span>
							
						</div>
						<div class="wrap-input100 validate-input" data-validate="Address is required">
							<font size="4" color="#AFA">Address</font>
							  <!-- <textarea name="message" rows="10" cols="30">The cat was playing in the garden.</textarea> -->
							<input class="input100" type="text" name="address" value="<?php echo $member->getaddress() ?>">
							<span class="focus-input100"></span>
							
						</div>
						<div class="container-login100-form-btn">
							<!-- <button type="submit"  class="login100-form-btn"  > -->
								<input type="submit" class="login100-form-btn" value="Submit">
							<!-- </button>  -->
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html> 