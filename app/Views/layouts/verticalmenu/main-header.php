<!-- Main Header-->
<div class="main-header sticky">
	<div class="container-fluid">

		<div class="main-header-left">
			<a href="<?php echo base_url('Home/index'); ?>"><img src="<?php echo base_url('assets/img/logo.png'); ?>" width="50px" alt="logo"></a>
			<a class=" main-header-menu" href="#" id="mainSidebarToggle"><span></span></a>
		</div>
		<div class="main-header-center">
			<div class="responsive-logo">
				<h4>SIM LPKH</h4>
			</div>
			<div class="input-group">

				<h2>Realisasi</h2>
			</div>
		</div>
		<div class="main-header-right">

			<div class="dropdown main-profile-menu">
				<a class="d-flex" href="">
					<span class="main-img-user"><img alt="avatar" src="<?php echo base_url('assets/img/user.png'); ?>"></span>
				</a>
				<div class="dropdown-menu">
					<div class="header-navheading">
						<h6 class="main-notification-title">User</h6>

					</div>
					<a class="dropdown-item border-top" href="<?php echo base_url('pages/profile'); ?>">
						<i class="fe fe-user"></i> My Profile
					</a>
					<a class="dropdown-item" href="<?php echo base_url('pages/profile'); ?>">
						<i class="fe fe-edit"></i> Edit Profile
					</a>
					<a class="dropdown-item" href="<?= base_url('/login'); ?>">
						<i class="fe fe-power"></i> Sign Out
					</a>
				</div>
			</div>
			<button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
			</button><!-- Navresponsive closed -->
		</div>
	</div>
</div>
<!-- End Main Header-->