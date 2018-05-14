<!--<html>
    <head>
    </head>
    <body>
        <form method="post" action="send_mail.php">
        To : <input type="text" name="Email"> <br/>
        Subject :   <input type="text" name="mail_sub">
       <br/>
         Message   <input type="text" name="mail_msg">
        <br/>
            <input type="submit" value="Send Email">
        </form>
    </body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>

	<title>product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
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
				<div class="login100-pic js-tilt" data-tilt>
		<!--			<form  action="insert.php" method="post" enctype="multipart/form-data">
						<img src="images/img-01.png" alt="IMG">
						<input type="file" name="image">
					</form>-->
					</div>

					<form method="post" action="Control/Add.php?id=send_mail">
					<span style="color:#AFA"; class="login100-form-title">
						Send Email
					</span>
					</form>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="mail_sub" placeholder="Subject">
						<span class="focus-input100"></span>
						<!--<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>-->
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Price is required">
						<input class="input100" type="text" name="mail_msg" placeholder="Message">
						<span class="focus-input100"></span>
					
					</div>

					<div class="container-login100-form-btn">
						<button name = "send email" type = "submit" value = "send email" class="login100-form-btn">
						send email
						</button>
					</div>
			<!--	</form>
					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
-->
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
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
