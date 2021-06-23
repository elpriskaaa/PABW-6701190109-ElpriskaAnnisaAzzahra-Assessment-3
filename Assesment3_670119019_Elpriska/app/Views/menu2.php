<!DOCTYPE html>
<html lang="en">
<head>
	<title>ART NOW</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="data/images/icons/favicon.png"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="data/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="data/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="data/fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="data/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="data/fonts/elegant-font/html-css/style.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="data/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="data/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="data/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="data/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="data/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="data/vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="data/vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="data/css/util.css">
	<link rel="stylesheet" type="text/css" href="data/css/main.css">
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
	<link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="data/simple-sidebar.css" rel="stylesheet">
	<!--===============================================================================================-->
	<style> 
	.button {
      background-color:pink;
      border-color:red;
      color:white;
      }
     </style>
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			

			<nav  class="navbar navbar-expand-lg navbar-light bg-light">

				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">

					
					
					<!-- Header Icon -->
					<div class="header-icons">
						
						<div class="container">
							<a class="navbar-brand" href="index.php">ART NOW
							</a>
							<span class="header-wrapicon2"></span>
							<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
								<li class="nav-item active">
									<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="shop.php">Shop</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="Keranjang.php">ShopCart</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="riwayat.php">ShopHistory</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="about.php">About</a>
								</li>
							</ul>
							<form class="navbar-form  navbar-right" action="pencarian.php" method="GET">
								<input type="text" class="form-control" name="keyword">
								<button class="button" >Search</button>
							</form>
						</div>
						
						<span class="linedivide1"></span>


						<div class="header-wrapicon2">

							<img src="data/images/icon1.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

							<!-- Header cart noti -->
							<div class="header-cart header-dropdown">
								<ul class="header-cart-wrapitem">
									<li class="header-cart-item">
										<div class="header-cart-item-img">
											<?php if (isset($_SESSION['pelanggan'])): ?>
												<img src="foto/<?php echo $_SESSION['pelanggan']['foto'] ?>" alt="IMG">
												<?php else: ?>
												<img src="foto/pp.jpg" alt="IMG">
											<?php endif ?>
										</div>

										<div class="header-cart-item-txt">
											<?php if (isset($_SESSION['pelanggan'])):?>
												<h2><?php echo $_SESSION["pelanggan"]['nama_user'];?></h2>
												<span class="header-cart-item-info">
													<?php echo $_SESSION["pelanggan"]['email'];?>
												</span>
												<?php else: ?>
													<h2>Silahkan Login</h2>

												<?php endif?>



											</div>
										</li>
									</ul>

									<div class="header-cart-total">

									</div>

									<div class="header-cart-buttons">
										<div class="header-cart-wrapbtn">
											<!-- Button -->
											<?php if (isset($_SESSION['pelanggan'])):?>
												<a  href="logout.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">LogOut</a>

											</div>

											<div class="header-cart-wrapbtn">
												<!-- Button --> 
												<a href="profil.php?id=<?php echo $_SESSION['user']['id_user'];?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">Profilku</a>
												<?php else:?>
													<a href="login.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
														Login
													</a>
												</div>
												<div class="header-cart-wrapbtn">
													<a href="daftar.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">Daftar</a>
												<?php endif?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



				</div>

			</nav>
		</div>

	</div>

</div>
</header>