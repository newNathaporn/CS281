<?php
session_start();
include "classes/Connection.php";
include "classes/Details.php";
include "classes/Member.php";
include "classes/Login.php";

$_SESSION["url"] = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . "?" . $_SERVER['QUERY_STRING'];

if (isset($_SESSION['id_user'])) {
	$member = Member::insertuser($conn, $_SESSION['id_user']);
} else {
	$member = null;
}
$pro_id = $_GET['id'];
$newproduct = Product::insertproduct($pro_id);
if ($newproduct == null) {
	header('location:index.php');
	exit;
}
?>
	<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
	<!DOCTYPE html>
	<html>

	<head>
		<title>Longdomdu'sor Shoppy</title>
		<!--/tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //tags -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<link href="css/font-awesome.css" rel="stylesheet">
		<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

		<!-- //for bootstrap working -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
		 rel='stylesheet' type='text/css'>
	</head>

	<body>
		<!-- header -->
		<div class="header" id="home">
			<div class="container">
				<ul>
					<?php if ($member == null) : ?>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal">
							<i class="fa fa-unlock-alt" aria-hidden="true"></i> SIGN IN </a>
					</li>
					<?php else : ?>
					<li>
						<a href="#" data-toggle="modal" data-target="#modal3">
							<?php echo $member->getfirstname() . " " . $member->getlastname(); ?> </a>
					</li>
					<?php endif; ?>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal2">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i> SIGN UP </a>
					</li>
					<li>
						<i class="fa fa-phone" aria-hidden="true"></i> Call : +66 826511203</li>
					<li>
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<a href="mailto:Fivepinky@gmail.com">Fivepinky@example.com</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- //header -->
		<!-- header-bot -->
		<div class="header-bot">
			<div class="header-bot_inner_wthreeinfo_header_mid">
				<div class="col-md-4 header-middle">
					<form action='Control/Add.php?id=searchproduct' method="post">
						<input type="search" name="search" placeholder="Search here..." required="">
						<input type="submit" value=" ">
						<div class="clearfix"></div>
					</form>
				</div>
				<!-- header-bot -->
				<div class="col-md-6 logo_agile">
					<a href="index.php">
						<img src="images/Logo1.jpg" alt=" ">
					</a>
				</div>
				<!-- header-bot -->
				<div class="col-md-2 agileits_schedule_bottom_right top_content">
					<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						<per class="share">Share On :</per>
						<a href="#" class="facebook">
							<div class="front">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</div>
							<div class="back">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</div>
						</a>
						<a href="#" class="twitter">
							<div class="front">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</div>
							<div class="back">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</div>
						</a>
						<a href="#" class="instagram">
							<div class="front">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</div>
							<div class="back">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</div>
						</a>
						<a href="#" class="pinterest">
							<div class="front">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</div>
							<div class="back">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</div>
						</a>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //header-bot -->
		<!-- banner -->
		<div class="ban-top">
			<div class="container">
				<div class="top_nav_left">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
								 aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav menu__list">
									<li class="active menu__item">
										<a class="menu__link" href="index.php">Home
											<span class="sr-only">(current)</span>
										</a>
									</li>
									<li class=" menu__item">
										<a class="menu__link" href="about.php">About</a>
									</li>
									<li class="dropdown menu__item">
										<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men's Perfumes
											<span class="caret"></span>
										</a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="agile_inner_drop_nav_info">
												<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
													<a href="mens.html">
														<img src="images/menperfume.jpg" alt=" " />
													</a>
												</div>
												<div class="col-sm-3 multi-gd-img">
													<ul class="multi-column-dropdown">
														<li>
															<a href="BrandProduct.php?brand=Chanel men">Chanel</a>
														</li>
														<li>
															<a href="BrandProduct.php?brand=Dior men">Dior</a>
														</li>
														<li>
															<a href="BrandProduct.php?brand=Jomalone men">Jo malone</a>
														</li>
														<li>
															<a href="BrandProduct.php?brand=Isseymiyake men">Issey miyake</a>
														</li>
														<li>
															<a href="BrandProduct.php?brand=Calvinklein men">Calvin Klein</a>
														</li>
													</ul>
												</div>
												<div class="col-sm-3 multi-gd-img">
													<ul class="multi-column-dropdown">
														<li>
															<a href="BrandProduct.php?brand=Burberry men">Burberry</a>
														</li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</ul>
									</li>
									<li class="dropdown menu__item">
										<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women's Perfumes
											<span class="caret"></span>
										</a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="agile_inner_drop_nav_info">
												<div class="col-sm-3 multi-gd-img">
													<ul class="multi-column-dropdown">
														<li>
															<a href="BrandProduct.php?brand=Chanel women">Chanel</a>
														</li>
														<li>
															<a href="BrandProduct.php?brand=Dior women">Dior</a>
														</li>
														<li>
															<a href="BrandProduct.php?brand=Jomalone women">Jo malone</a>
														</li>
														<li>
															<a href="BrandProduct.php?brand=Isseymiyake women">Issey miyake</a>
														</li>
														<li>
															<a href="BrandProduct.php?brand=Calvinklein women">Calvin Klein</a>
														</li>
													</ul>
												</div>
												<div class="col-sm-3 multi-gd-img">
													<ul class="multi-column-dropdown">
														<li>
															<a href="BrandProduct.php?brand=Burberry women">Burberry</a>
														</li>
													</ul>
												</div>
												<div class="col-sm-6 multi-gd-img multi-gd-text ">
													<a href="womens.html">
														<img src="images/Womenperfumes.jpg" alt=" " />
													</a>
												</div>
												<div class="clearfix"></div>
											</div>
										</ul>
										<li class=" menu__item">
											<a class="menu__link" href="likeShow.php">LIKE</a>
										</li>

										<?php if (!($member == null)) : ?>
										<?php if ($member->gettype() === 'admin') : ?>
										<li class=" menu__item">
											<a class="menu__link" href="addproduct.php">AddProduct</a>
										</li>
										<?php endif; ?>
										<?php endif; ?>
								</ul>
							</div>
						</div>
					</nav>
				</div>
				<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						<form action="CartShow.php" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="w3view-cart" type="submit" name="submit" value="">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
							</button>
						</form>

					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //banner-top -->
		<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
							<h3 class="agileinfo_sign">SIGN IN
								<span>NOW</span>
							</h3>
							<form action="Control/Accountuser.php" method="POST">
								<div class="styled-input agile-styled-input-top">
									<input type="text" name="uid" required="">
									<label>Username</label>
									<span></span>
								</div>
								<div class="styled-input">
									<input type="password" name="pwd" required="">
									<label>Password</label>
									<span></span>
								</div>
								<input type="submit" value="Sign In">
							</form>

							<ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
								<li>
									<a href="#" class="facebook">
										<div class="front">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</div>
										<div class="back">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</div>
									</a>
								</li>
								<li>
									<a href="#" class="twitter">
										<div class="front">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</div>
										<div class="back">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</div>
									</a>
								</li>
								<li>
									<a href="#" class="instagram">
										<div class="front">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</div>
										<div class="back">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</div>
									</a>
								</li>
								<li>
									<a href="#" class="pinterest">
										<div class="front">
											<i class="fa fa-linkedin" aria-hidden="true"></i>
										</div>
										<div class="back">
											<i class="fa fa-linkedin" aria-hidden="true"></i>
										</div>
									</a>
								</li>
							</ul>
							<div class="clearfix"></div>
							<p>
								<a href="#" data-toggle="modal" data-target="#myModal2"> Don't have an account?</a>
							</p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic1.jpg" alt=" " />
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
		<!-- //Modal1 -->
		<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
							<h3 class="agileinfo_sign">Sign Up
								<span>Now</span>
							</h3>
							<form action="classes/SignUp.php" method="post">
								<div class="styled-input agile-styled-input-top">
									<input type="text" name="firstname" required=" ">
									<label>Firstname</label>
									<span></span>
								</div>
								<div class="styled-input">
									<input type="text" name="lastname" required=" ">
									<label>Lastname</label>
									<span></span>
								</div>
								<div class="styled-input">
									<input type="text" name="uid" required=" ">
									<label>Username</label>
									<span></span>
								</div>

								<div class="styled-input">
									<input type="password" name="pwd" required=" ">
									<label>Password</label>
									<span></span>
								</div>
								<div class="styled-input">
									<input type="email" name="email" required=" ">
									<label>Email</label>
									<span></span>
								</div>
								<div class="styled-input">
								<input type="text" name="address" required=" ">
								<label>Address</label>
								<span></span>
								</div>
								<div class="styled-input">
									<input type="text" name="phone" required=" ">
									<label>Phone</label>
									<span></span>
								</div>
								<input type="submit" value="sign up">
							</form>
							<ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
								<li>
									<a href="#" class="facebook">
										<div class="front">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</div>
										<div class="back">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</div>
									</a>
								</li>
								<li>
									<a href="#" class="twitter">
										<div class="front">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</div>
										<div class="back">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</div>
									</a>
								</li>
								<li>
									<a href="#" class="instagram">
										<div class="front">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</div>
										<div class="back">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</div>
									</a>
								</li>
								<li>
									<a href="#" class="pinterest">
										<div class="front">
											<i class="fa fa-linkedin" aria-hidden="true"></i>
										</div>
										<div class="back">
											<i class="fa fa-linkedin" aria-hidden="true"></i>
										</div>
									</a>
								</li>
							</ul>
							<div class="clearfix"></div>
							<p>
								<a href="#">By clicking register, I agree to your terms</a>
							</p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic2.jpg" alt=" " />
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
		<!-- //Modal2 -->
		<div class="modal fade" id="modal3" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body modal-body-sub_agile">
						<div class="center-block text-center">
							<h3 class="agileinfo_sign">Do you want to Logout please click logout</h3>
							<form action="classes/Logout.php" method="post">
								<input type="submit" name="submit" value="Logout">
							</form>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
		<!--/single_page-->
		<!-- /banner_bottom_agile_info -->
		<div class="page-head_agile_info_w3l">
			<div class="container">
				<h3>Perfumes
					<span>Page </span>
				</h3>
				<!--/w3_short-->
				<div class="services-breadcrumb">
					<div class="agile_inner_breadcrumb">

						<ul class="w3_short">
							<li>
								<a href="index.php">Home</a>
								<i>|</i>
							</li>
							<li>
								<?php echo $newproduct->getname_brand(); ?> Page</li>
						</ul>
					</div>
				</div>
				<!--//w3_short-->
			</div>
		</div>

		<!-- banner-bootom-w3-agileits -->
		<div class="banner-bootom-w3-agileits">
			<div class="container">
				<div class="col-md-4 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">

							<ul class="slides">
								<li data-thumb="<?php echo " images " . '/' . $newproduct->getimage(); ?>">
									<div class="thumb-image">
										<img src="<?php echo " images " . '/' . $newproduct->getimage(); ?>" data-imagezoom="true" class="img-responsive"> </div>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3>
						<?php echo $newproduct->getname() ?>
					</h3>
					<p>
						<span class="item_price">฿
							<?php echo $newproduct->getprice() - $newproduct->getsale(); ?>.00</span>
						<del>฿
							<?php echo $newproduct->getprice(); ?>.00</del>
					</p>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							<form action="Control/Add.php?id=addcart" method="post">
							<fieldset>
								<input type="hidden" name="id_name" value="<?php if (!($member == null)) {
																																																			echo $member->getidUser();
																																																		} ?>" />
								<input type="hidden" name="num" value="1" />
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" />
								<input type="hidden" name="business" value=" " />
								<input type="hidden" name="idproduct_name" value="<?php echo $newproduct->getid_product() ?>" />
								<input type="hidden" name="amount" value="<?php echo $newproduct->getprice() - $newproduct->getsale(); ?>" />
								<input type="hidden" name="discount_amount" value="0" />
								<input type="hidden" name="currency_code" value="THB" />
								<input type="hidden" name="return" value=" " />
								<input type="hidden" name="cancel_return" value=" " />
								<?php if (!($newproduct->getqty() <= 0)) : ?>
								<input type="submit" name="submit" value="Add to cart" class="button" />
								<?php else : ?>
								<input  value="     NotAdd to cart" class="button" />
								<?php endif; ?>
							</fieldset>
							</form>
						</div>
						<fieldset>
								<?php if (!($member == null)) : ?>
								<?php $n1 = $newproduct->getprice() - $newproduct->getsale();
							echo "<a href='Control/Add.php?id=addlike&id_product=" . $newproduct->getid_product() . " &username=" . $member->getidUser() . "' class='glyphicon glyphicon-heart-empty' style='color: red'></a>"; ?>
								<?php else : ?>
									<?php echo "<a href='Control/Add.php?id=addlike&id_product=-1' class='glyphicon glyphicon-heart-empty' style='color: red'></a>"; ?>
								<?php endif; ?>
								</fieldset>						
					</div>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
						<li class="share">Share On : </li>
						<li>
							<a href="#" class="facebook">
								<div class="front">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</div>
								<div class="back">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="twitter">
								<div class="front">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</div>
								<div class="back">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="instagram">
								<div class="front">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</div>
								<div class="back">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pinterest">
								<div class="front">
									<i class="fa fa-linkedin" aria-hidden="true"></i>
								</div>
								<div class="back">
									<i class="fa fa-linkedin" aria-hidden="true"></i>
								</div>
							</a>
						</li>
					</ul>

				</div>
				<div class="clearfix"> </div>
				<!-- /new_arrivals -->
				<div class="responsive_tabs_agileits">
					<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Description</li>
							<!--<li>Reviews</li>-->
							<!--<li>Information</li>-->
						</ul>
						<div class="resp-tabs-container">
							<!--/tab_one-->
							<div class="tab1">

								<div class="single_page_agile_its_w3ls">
									<h6>
										<?php echo $newproduct->getname(); ?>
									</h6>
									<!-- <p>Another definition of Mr. Burberry aroma to increase the level of seduction to another level. The glamor of London at night The aroma of warm aroma of fragrant wood. The aroma of tarragon, cinnamon and the aroma of patchouli first softly with the aroma of amber and vetiver.</p> -->
									<p class="w3ls_para">
										<?php echo $newproduct->getdetail(); ?>
									</p>
								</div>
							</div>
							<!--//tab_one-->
							
						</div>
					</div>
				</div>
				<!-- //new_arrivals -->
				<!--/slider_owl-->

				<div class="w3_agile_latest_arrivals">
					<h3 class="wthree_text_info">Featured
						<span>Arrivals</span>
					</h3>
					<?php $suggestionProduct = Product::suggestion($newproduct->getname_brand(), $newproduct->getid_product());
				foreach ($suggestionProduct as $s => $value) { ?>
					<?php if ($s === 4) break; ?>

					<div class="col-md-3 product-men single">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="<?php echo " images " . '/' . $value->getimage(); ?>" alt="" class="pro-image-front">
								<img src="<?php echo " images " . '/' . $value->getimage(); ?>" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="ProductDetail.php?id=<?php echo $value->getid_product(); ?>" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
									<?php if ($value->getqty() <= 0) : ?>
									<span class="product-new-top">OUT</span>
									<?php else : ?>
									<span class="product-new-top">New</span>
									<?php endif; ?>
							</div>
							<div class="item-info-product ">
								<h4>
									<a href="ProductDetail.php?id=<?php echo $value->getid_product(); ?>">
										<?php echo $value->getname(); ?>
									</a>
								</h4>
								<br>
								<div class="info-product-price">
									<span class="item_price">฿
										<?php echo $value->getprice() - $value->getsale(); ?>.00
									</span>
									<del>฿<?php echo $value->getprice(); ?>.00</del><br>Amount <?php echo $value->getqty(); ?> items </br>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
										<form action="Control/Add.php?id=addcart" method="post">
											<fieldset>
												<input type="hidden" name="id_name" value="<?php if (!($member == null)) {
																																																							echo $member->getidUser();
																																																						} ?>" />
												<input type="hidden" name="num" value="1" />
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="idproduct_name" value="<?php echo $value->getid_product() ?>" />
												<input type="hidden" name="amount" value="<?php echo $value->getprice() - $value->getsale(); ?>" />
												<input type="hidden" name="discount_amount" value="0" />
												<input type="hidden" name="currency_code" value="THB" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<?php if (!($value->getqty() <= 0)) : ?>
												<input type="submit" name="submit" value="Add to cart" class="button" />
												<?php else : ?>
												<input  value="       NotAdd to cart" class="button" />
												<?php endif; ?>
											</fieldset>
										</form>
								</div>

								<fieldset>
								<?php if (!($member == null)) : ?>
								<?php $n1 = $value->getprice() - $value->getsale();
							echo "<a href='Control/Add.php?id=addlike&id_product=" . $value->getid_product() . " &username=" . $member->getidUser() . "' class='glyphicon glyphicon-heart-empty' style='color: red'></a>"; ?>
								<?php else : ?>
									<?php echo "<a href='Control/Add.php?id=addlike&id_product=-1' class='glyphicon glyphicon-heart-empty' style='color: red'></a>"; ?>
								<?php endif; ?>
								</fieldset>

							</div>

						</div>
					</div>
					<?php 
			} ?>
					<div class="clearfix"> </div>
					<!--//slider_owl-->
				</div>
			</div>
		</div>
		<!--//single_page-->
		<!--/grids-->
		<div class="coupons">
			<div class="coupons-grids text-center">
				<div class="w3layouts_mail_grid">
					<div class="col-md-3 w3layouts_mail_grid_left">
						<div class="w3layouts_mail_grid_left1 hvr-radial-out">
							<i class="fa fa-truck" aria-hidden="true"></i>
						</div>
						<div class="w3layouts_mail_grid_left2">
							<h3>FREE SHIPPING</h3>
							<p>when you buy total 490 Bath, My shop will free shipping.</p>
						</div>
					</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
						<div class="w3layouts_mail_grid_left1 hvr-radial-out">
							<i class="fa fa-headphones" aria-hidden="true"></i>
						</div>
						<div class="w3layouts_mail_grid_left2">
							<h3>24/7 SUPPORT</h3>
							<p>My shop will support, when you coming shopping on my Longdomdu'sor Shoppy all time and all day.</p>
						</div>
					</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
						<div class="w3layouts_mail_grid_left1 hvr-radial-out">
							<i class="fa fa-shopping-bag" aria-hidden="true"></i>
						</div>
						<div class="w3layouts_mail_grid_left2">
							<h3>PRODUCT BACK GUARANTEE</h3>
							<p>You can confident in my Longdomdu'sor Shoppy, when you find problem you can product back.</p>
						</div>
					</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
						<div class="w3layouts_mail_grid_left1 hvr-radial-out">
							<i class="fa fa-gift" aria-hidden="true"></i>
						</div>
						<div class="w3layouts_mail_grid_left2">
							<h3>HAVE POINT ON CARD</h3>
							<p>when you buy a lot of perfume, you will recieve point on your card.</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>

			</div>
		</div>
		<!--grids-->
		<!-- footer -->
		<div class="footer">
			<div class="footer_agile_inner_info_w3l">
				<div class="col-md-3 footer-left">
					<h2>
						<a href="index.php">
							<span>L</span>ongdomdu'sor Shoppy </a>
					</h2>
					<p>Longdomdu'sor Shoppy is a collect many brand of perfumes and you can buy inexpensive cost more than another shop.</p>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
						<li>
							<a href="#" class="facebook">
								<div class="front">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</div>
								<div class="back">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="twitter">
								<div class="front">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</div>
								<div class="back">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="instagram">
								<div class="front">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</div>
								<div class="back">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="#" class="pinterest">
								<div class="front">
									<i class="fa fa-linkedin" aria-hidden="true"></i>
								</div>
								<div class="back">
									<i class="fa fa-linkedin" aria-hidden="true"></i>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-9 footer-right">
					<div class="sign-grds">
						<div class="col-md-4 sign-gd">
							<h4>Our
								<span>Information</span>
							</h4>
							<ul>
								<li>
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="about.php">About</a>
								</li>
								<!--<li><a href="typography.html">Short Codes</a></li>
						<li><a href="contact.html">Contact</a></li>-->
							</ul>
						</div>

						<div class="col-md-5 sign-gd-two">
							<h4>Store
								<span>Information</span>
							</h4>
							<div class="w3-address">
								<div class="w3-address-grid">
									<div class="w3-address-left">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</div>
									<div class="w3-address-right">
										<h6>Phone Number</h6>
										<p>+66 826511203</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="w3-address-grid">
									<div class="w3-address-left">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<div class="w3-address-right">
										<h6>Email Address</h6>
										<p>Email :
											<a href="mailto:Fivepinky@gmail.com"> Fivepinky@gmail.com</a>
										</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="w3-address-grid">
									<div class="w3-address-left">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
									</div>
									<div class="w3-address-right">
										<h6>Location</h6>
										<p>Thammasat University.

										</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="col-md-3 sign-gd flickr-post">
							<h4>Member</h4>
							<ul>
								<li>
									<a href="#">
										<img src="images/thorch.jpg" alt=" " class="img-responsive" />
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/new.jpg" alt=" " class="img-responsive" />
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/moss.jpg" alt=" " class="img-responsive" />
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/ongfong.jpg" alt=" " class="img-responsive" />
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/poppy.jpg" alt=" " class="img-responsive" />
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/nun.jpg" alt=" " class="img-responsive" />
									</a>
								</li>
								<!--<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>-->
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!--<div class="clearfix"></div>
			<div class="agile_newsletter_footer">
					<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form action="#" method="post">
					<input type="email" placeholder="Enter your email..." name="email" required="">
					<input type="submit" value="Submit">
				</form>
			</div> -->

				<div class="clearfix"></div>
			</div>
			<p class="copy-right">&copy 2017 Elite shoppy. All rights reserved | Design by
				<a href="http://w3layouts.com/">W3layouts</a>
			</p>
		</div>

		<!-- //footer -->

		<!-- login -->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-info">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body modal-spa">
						<div class="login-grids">
							<div class="login">
								<div class="login-bottom">
									<h3>Sign up for free</h3>
									<form>
										<div class="sign-up">
											<h4>Email :</h4>
											<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}"
											 required="">
										</div>
										<div class="sign-up">
											<h4>Password :</h4>
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"
											 required="">

										</div>
										<div class="sign-up">
											<h4>Re-type Password :</h4>
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"
											 required="">

										</div>
										<div class="sign-up">
											<input type="submit" value="REGISTER NOW">
										</div>

									</form>
								</div>
								<div class="login-right">
									<h3>Sign in with your account</h3>
									<form>
										<div class="sign-in">
											<h4>Email :</h4>
											<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}"
											 required="">
										</div>
										<div class="sign-in">
											<h4>Password :</h4>
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"
											 required="">
											<a href="#">Forgot password?</a>
										</div>
										<div class="single-bottom">
											<input type="checkbox" id="brand" value="">
											<label for="brand">
												<span></span>Remember Me.</label>
										</div>
										<div class="sign-in">
											<input type="submit" value="SIGNIN">
										</div>
									</form>
								</div>
								<div class="clearfix"></div>
							</div>
							<p>By logging in you agree to our
								<a href="#">Terms and Conditions</a> and
								<a href="#">Privacy Policy</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //login -->
		<a href="#home" class="scroll" id="toTop" style="display: block;">
			<span id="toTopHover" style="opacity: 1;"> </span>
		</a>
		<!-- js -->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- //js -->
		<script src="js/modernizr.custom.js"></script>
		<!-- Custom-JavaScript-File-Links -->
		<!-- cart-js -->
		<script src="js/minicart.min.js"></script>
		<script>
			// Mini Cart
			paypal.minicart.render({
				action: 'cart.php'
			});

			function send() {
				var form = document.getElementById("myForm");
				// form.setAttribute('method', 'post');
				// form.setAttribute('action', 'cart.php');
				//
				// form.submit();
				$.ajax({
					type: "POST",  //type of method
					url: "cart.php",  //your page
					data: form,// passing the values
					success: function (res) {
						//do what you want here...
					}
				});
			}
	}

			if (~window.location.search.indexOf('reset=true')) {
				paypal.minicart.reset();
			}
		</script>

		<!-- //cart-js -->
		<!-- single -->
		<script src="js/imagezoom.js"></script>
		<!-- single -->
		<!-- script for responsive tabs -->
		<script src="js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion
					width: 'auto', //auto or any width like 600px
					fit: true,   // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!-- FlexSlider -->
		<script src="js/jquery.flexslider.js"></script>
		<script>
			// Can also be used with $(document).ready()
			$(window).load(function () {
				$('.flexslider').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
		</script>
		<!-- //FlexSlider-->
		<!-- //script for responsive tabs -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function ($) {
				$(".scroll").click(function (event) {
					event.preventDefault();
					$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
				});
			});
		</script>
		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function () {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear'
					};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
		<!-- //here ends scrolling icon -->

		<!-- for bootstrap working -->
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</body>

	</html>