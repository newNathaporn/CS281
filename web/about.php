<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
include "classes/Connection.php";
include "classes/Member.php";
session_start();
$_SESSION["url"] = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . "?" . $_SERVER['QUERY_STRING'];
if (isset($_SESSION['id_user'])) {
	$member = Member::insertuser($conn, $_SESSION['id_user']);
} else {
	$member = null;
}
?>
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
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/team.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
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
			<form action="Search.php" method="post">
				<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
		<div class="col-md-6 logo_agile">
	<a href="index.php"><img src="images/Logo1.jpg" alt=" " ></a>
 </div>
			<!-- header-bot -->
<div class="col-md-2 agileits_schedule_bottom_right top_content">
		<ul class="social-nav model-3d-0 footer-social w3_agile_social">
<per class="share">Share On :</per> <a href="#" class="facebook">
								<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
						 <a href="#" class="twitter">
								<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a>
						 <a href="#" class="instagram">
								<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a>
						 <a href="#" class="pinterest">
								<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a>
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
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item menu__item--current"><a class="menu__link" href="about.php">About</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men's Perfumes <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/menperfume.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
                      						<li><a href="BrandProduct.php?brand=Chanel men">Chanel</a></li>
											<li><a href="BrandProduct.php?brand=Dior men">Dior</a></li>
											<li><a href="BrandProduct.php?brand=Jomalone men">Jo malone</a></li>
											<li><a href="BrandProduct.php?brand=Isseymiyake men">Issey miyake</a></li>
											<li><a href="BrandProduct.php?brand=Calvinklein men">Calvin Klein</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="BrandProduct.php?brand=Burberry men">Burberry</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
							<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women's Perfume
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="BrandProduct.php?brand=Chanel women">Chanel</a></li>
											<li><a href="BrandProduct.php?brand=Dior women">Dior</a></li>
											<li><a href="BrandProduct.php?brand=Jomalone women">Jo malone</a></li>
											<li><a href="BrandProduct.php?brand=Isseymiyake women">Issey miyake</a></li>
											<li><a href="BrandProduct.php?brand=Calvinklein women">Calvin Klein</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li>
												<li><a href="BrandProduct.php?brand=Burberry women">Burberry</a></li>
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
							</li>
					<!--<li class="menu__item dropdown">
					   <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Web Icons</a></li>
									<li><a href="typography.html">Typography</a></li>
								</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="contact.html">Contact</a></li> -->
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
				</div>
			  </div>
			</nav>
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						<form action="CartShow.php" method="post" class="last">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
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
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
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
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter">
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic1.jpg" alt=" "/>
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
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
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
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter">
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic2.jpg" alt=" "/>
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
								<input type="submit"  name="submit" value="Logout">
							</form>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
		</div>
</div>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>About <span>Us </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Home</a><i>|</i></li>
								<li>About</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
<!-- /banner_bottom_agile_info -->
    <div class="banner_bottom_agile_info">
	    <div class="container">
			<div class="agile_ab_w3ls_info">
				<div class="col-md-6 ab_pic_w3ls">
				   	<img src="images/about.jpg" alt=" " class="img-responsive" />
				</div>
				 <div class="col-md-6 ab_pic_w3ls_text_info">
				    <h5>ABOUT OUR LONGDOMDU'SOR</h5>
					<p>My Longdomdu'sor is a website about perfumes many brands such as Chanel, Dior, Jo malone, Issey miyake, Calvin Klein, Burberry. And my shop is a online shop, It's price inexpensive.</p>
				</div>
				  <div class="clearfix"></div>
			</div>
		 </div>
    </div>
	<!-- team -->
<div class="banner_bottom_agile_info team">
	<div class="container">
	            <h3 class="wthree_text_info">Our Team <span>Members</span></h3>
			<div class="footer_agile_inner_info_w3l"><!--footer_agile_inner_info_w3l-->
					<div class="col-md-4 team-grids">
						<div class="thumbnail team-w3agile">
							<img src="images/thorch.jpg" class="img-responsive" alt="">
							<div class="social-icons team-icons right-w3l fotw33">
							<div class="caption">
								<h4>Juthamas Taweechalad</h4>
								</div>
								<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter">
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
							          </div>
						     </div>
			         	</div>
						<div class="col-md-4 team-grids">
						<div class="thumbnail team-w3agile">
							<img src="images/new.jpg" class="img-responsive" alt="">
							<div class="social-icons team-icons right-w3l fotw33">
							<div class="caption">
								<h4>Nathaporn Buathong</h4>
								</div>
								<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter">
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
							          </div>
						     </div>
			         	</div>
						<div class="col-md-4 team-grids">
						<div class="thumbnail team-w3agile">
							<img src="images/moss.jpg" class="img-responsive" alt="">
							<div class="social-icons team-icons right-w3l fotw33">
							<div class="caption">
								<h4>Pathomporn Subchareonchai</h4>
								</div>
								<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter">
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
							          </div>
						     </div>
			         	</div>
						<div class="col-md-4 team-grids">
						<div class="thumbnail team-w3agile">
							<img src="images/ongfong.jpg" class="img-responsive" alt="">
							<div class="social-icons team-icons right-w3l fotw33">
							<div class="caption">
								<h4>Puangporn Kawsamrung</h4>
								</div>
								<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter">
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
							          </div>
						     </div>
			         	</div>
								<div class="col-md-4 team-grids">
								<div class="thumbnail team-w3agile">
									<img src="images/poppy.jpg" class="img-responsive" alt="">
									<div class="social-icons team-icons right-w3l fotw33">
									<div class="caption">
										<h4>Tanawan Kordit</h4>
									</div>
										<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
																	<li><a href="#" class="facebook">
																		  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																		  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
																	<li><a href="#" class="twitter">
																		  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																		  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
																	<li><a href="#" class="instagram">
																		  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																		  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
																	<li><a href="#" class="pinterest">
																		  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																		  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
																</ul>
									          </div>
								     </div>
					         	</div>
										<div class="col-md-4 team-grids">
										<div class="thumbnail team-w3agile">
											<img src="images/nun.jpg" class="img-responsive" alt="">
											<div class="social-icons team-icons right-w3l fotw33">
											<div class="caption">
												<h4>Theeranun Tongprasong</h4>
												</div>
												<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
																			<li><a href="#" class="facebook">
																				  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																				  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
																			<li><a href="#" class="twitter">
																				  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																				  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
																			<li><a href="#" class="instagram">
																				  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																				  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
																			<li><a href="#" class="pinterest">
																				  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																				  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
																		</ul>
											          </div>
										     </div>
							         	</div>
					<div class="clearfix"> </div>
				</div>
	       </div>
		</div>
<!-- //team -->

	<!-- schedule-bottom -->

<!-- //schedule-bottom -->
  <!-- banner-bootom-w3-agileits -->

<!--/grids-->

<!--/grids-->
	<!-- /we-offer -->

	<!-- //we-offer -->
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
						<p>FREE SHIPPING when you buy total 490 Bath, My shop will free shipping.</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>24/7 SUPPORT</h3>
						<p>My shop will support, when you coming shopping on my Longdomdu'sor Shoppy all time and all day</p>
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
			<h2><a href="index.php"><span>L</span>ongdomdu'sor Shoppy </a></h2>
			<p>Longdomdu'sor Shoppy is a collect
		 many brand of perfumes and you can
		 buy inexpensive cost more than another shop.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter">
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
		</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Our <span>Information</span> </h4>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<!--	<li><a href="typography.html">Short Codes</a></li>
							<li><a href="contact.html">Contact</a></li>-->
					</ul>
				</div>

				<div class="col-md-5 sign-gd-two">
					<h4>Store <span>Information</span></h4>
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
								<p>Email :<a href="mailto:example@email.com">Fivepinky@gmail.com</a></p>
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
					<h4>Flickr <span>Posts</span></h4>
					<ul>
						<li><a href="single.html"><img src="images/thorch.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/new.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/moss.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/ongfong.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/poppy.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/nun.jpg" alt=" " class="img-responsive" /></a></li>
				<!--		<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li> -->
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<!--		<div class="agile_newsletter_footer">
						<div class="col-sm-6 newsleft">
					<h3>SIGN UP FOR NEWSLETTER !</h3>
				</div>
				<div class="col-sm-6 newsright">
					<form action="#" method="post">
						<input type="email" placeholder="Enter your email..." name="email" required="">
						<input type="submit" value="Submit">
					</form>
				</div>-->

		<div class="clearfix"></div>
	</div>
		<p class="copy-right">&copy 2017 . All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>
<!-- //footer -->

<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>

										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links -->
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: 'cart.php'
	});

	function send()
	{
			var form =   document.getElementById( "myForm" );
			// form.setAttribute('method', 'post');
	    // form.setAttribute('action', 'cart.php');
			//
	  	// form.submit();
			$.ajax({
	            type : "POST",  //type of method
	            url  : "cart.php",  //your page
	            data : form,// passing the values
	            success: function(res){
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
	<!---->
							<script type='text/javascript'>//<![CDATA[
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 1000, 7000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>

							</script>
						<script type="text/javascript" src="js/jquery-ui.js"></script>
					 <!---->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
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
