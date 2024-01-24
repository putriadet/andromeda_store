<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=base_url('assets/user/images/icons/favicon-32x32.png')?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/'); ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/'); ?>fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/'); ?>fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/'); ?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/'); ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/'); ?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/'); ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/'); ?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/'); ?>vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/'); ?>vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/'); ?>vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/'); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/'); ?>css/main.css">
<!--===============================================================================================-->
</head>

<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>
						<div class="right-top-bar flex-w h-full">
						<?php if (!empty($this->session->userdata('email'))) { ?>
						<a href="#" class="flex-c-m trans-04 p-lr-25"><?= $user['name']; ?></a>
						<a href="<?= site_url('auth/logout') ?>" class="flex-c-m trans-04 p-lr-25">
							Logout
						</a>						
						<?php } else { ?>
						<a class="flex-c-m trans-04 p-lr-25" href="<?= site_url('Auth') ?>">Login</a>
						<?php if (!empty($this->session->userdata('email'))) { ?>
						<?php } ?>
					</div>
						<?php } ?> 
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="<?= base_url('assets/user/'); ?>images/icons/logo.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="<?= site_url('User'); ?>">Home</a>
							</li>

							<li>
								<a href="<?= site_url('User/all_product'); ?>">Shop</a>
							</li>

							<li class="label1" data-label1="hot">
								<a href="<?= site_url('User/new_arrival'); ?>">New Arrival</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart" >
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="<?= base_url('assets/user/'); ?>images/icons/logo.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 js-show-cart">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
				<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>
						<div class="right-top-bar flex-w h-full">
						<?php if (!empty($this->session->userdata('email'))) { ?>
						<a href="#" class="flex-c-m trans-04 p-lr-25"><?= $user['name']; ?></a>
						<a href="<?= site_url('auth/logout') ?>" class="flex-c-m trans-04 p-lr-25">
							Logout
						</a>						
						<?php } else { ?>
						<a class="flex-c-m trans-04 p-lr-25" href="<?= site_url('Auth') ?>">Login</a>
						<?php if (!empty($this->session->userdata('email'))) { ?>
						<?php } ?>
					</div>
						<?php } ?> 
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="<?= site_url('User'); ?>">Home</a>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="<?= site_url('User/all_product'); ?>">Shop</a>
				</li>

				<li>
					<a href="<?= site_url('User/new_arrival'); ?>" class="label1 rs1" data-label1="hot">New Arrival</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>
			<div class="header-cart flex-col-l p-l-65 p-r-25">
				<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<?php
				foreach ($this->cart->contents() as $items) : ?>
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="<?= base_url('assets/user/'); ?>images/item-cart-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							<?php echo $items['name'] ?>
							</a>

							<span class="header-cart-item-info">
							Rp<?php echo number_format($items['price'], 0, ',', '.')?> x <?php echo $items['qty'] ?>
							</span>
						</div>
					</li>
					<?php endforeach; ?>
				<div class="header-cart-total w-full p-tb-40">
					Rp <?php echo number_format($this->cart->total(), 0, ',', '.') ?>
				</div>
			</div>
			
				<div class="w-full">
					<div class="header-cart-buttons flex-w w-full">
						<a href="<?= site_url('Transaksi'); ?>" class="flex-c-m stext-101 cl0 size-119 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
