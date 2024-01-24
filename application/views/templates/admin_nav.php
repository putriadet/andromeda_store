<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('Admin') ?>">
		<div class="sidebar-brand-text mx-3">ADMIN</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Administrator
	</div>

	<!-- Nav Item - Dash -->
	<li class="nav-item">
		<a class="nav-link" href="<?= site_url('Admin') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
		<a class="nav-link" href="<?= site_url('categories') ?>">
			<i class="fas fa-th"></i>
			<span>Categories</span></a>
		<a class="nav-link" href="<?= site_url('Product') ?>">
			<i class="fas fa-fire"></i>
			<span>Produk</span></a>
		<a class="nav-link" href="<?= site_url('Admin/Invoice') ?>">
			<i class="fas fa-file-invoice"></i>
			<span>Invoice</span></a>
	</li>


	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		User
	</div>

	<!-- Nav Item - Charts -->
	<li class="nav-item">
		<a class="nav-link" href="<?= site_url('Member') ?>">
			<i class="fas fa-fw fa-thin fa-user"></i>
			<span>Member</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<!-- Topbar -->
		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

			<!-- Sidebar Toggle (Topbar) -->
			<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
				<i class="fa fa-bars"></i>
			</button>

			<!-- Topbar Navbar -->
			<ul class="navbar-nav ml-auto">

				<!-- Nav Item - User Information -->
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
						<img class="img-profile rounded-circle" src="<?= base_url('assets/admin/img/profile/default.jpg') ?>">
					</a>
					<!-- Dropdown - User Information -->
					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
						<a class="dropdown-item" href="#">
							<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
							Profile
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
							<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
							Logout
						</a>
					</div>
				</li>
			</ul>
		</nav>
		<!-- End of Topbar -->
