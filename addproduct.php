<!DOCTYPE html>
<html lang="en">

<head>

	<title>product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
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


					<form class="login100-form validate-form" action="Control/Add.php?id=addproduct" method="post" enctype="multipart/form-data">
						<span style="color:#AFA" ; class="login100-form-title">
							Add Product
						</span>
						<input type="file" name="image">
						<br>
						<br>
						<select name="name_brand">
							<option value="Burberry men">Burberry men</option>
							<option value="Burberry women">Burberry women</option>
							<option value="Chanel men">Chanel men</option>
							<option value="Chanel women">Chanel women</option>
							<option value="Dior men">Dior men</option>
							<option value="Dior women">Dior women</option>
							<option value="Jomalone men">Jo malone men</option>
							<option value="Jomalone women">Jo malone women</option>
							<option value="Isseymiyake men">Issey miyake men</option>
							<option value="Isseymiyake women">Issey miyake women</option>
							<option value="Calvinklein men">Calvin klein men</option>
							<option value="Calvinklein women">Calvin klein women</option>
						</select>
						<br></br>
						<div class="wrap-input100 validate-input" data-validate="Name is required">
							<input class="input100" type="text" name="name" placeholder="Name">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Price is required">
							<input class="input100" type="text" name="price" placeholder="Price cost">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate="On Sale is required">
							<input class="input100" type="text" name="sale" placeholder="On Sale">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate="Detail is required">
							<input class="input100" type="text" name="detail" placeholder="Detail">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate="Quantity is required">
							<input class="input100" type="text" name="qty" placeholder="Quantity">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="container-login100-form-btn">
							<button name="addproduct" type="submit" value="addproduct" class="login100-form-btn">
								add product
							</button>
						</div>
					</form>
					<br>
					<div class="login100-form validate-form">
						<a href="email.php">
							<button type="submit" class="login100-form-btn">
								Send Email
							</button>
						</a>
					</div>

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