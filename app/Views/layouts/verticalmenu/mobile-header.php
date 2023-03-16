<!-- Mobile-header -->
<div class="mobile-main-header">
	<div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
		<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
			<div class="d-flex order-lg-2 ml-auto">
				<div class="dropdown main-profile-menu">
					<a class="d-flex" href="#">
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

			</div>
		</div>
	</div>
</div>
<!-- Mobile-header closed -->