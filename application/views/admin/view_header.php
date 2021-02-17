<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Settings</title>
	
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/datepicker3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/all.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/jquery.fancybox.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/summernote.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/style.css">
	
	<style>
		.skin-blue .wrapper,
		.skin-blue .main-header .logo,
		.skin-blue .main-sidebar {
			background-color: #ebeff4 !important;
		}
		.content-header>h1,
		.content-header .content-header-left h1,
		h3 {
			color: #3498db!important;
		}

		.box.box-info {
			border-top-color: #3498db!important;
		}

		.nav-tabs-custom>.nav-tabs>li.active {
			border-top-color: transparent !important;
		}

		.skin-blue .sidebar a {
			color: #455a64!important;
		}

		.skin-blue .sidebar-menu>li>.treeview-menu {
			margin: 0!important;
		}

		.nav-tabs-custom>.nav-tabs>li {
			border-top-width: 1px!important;
		}

	</style>
	
</head>

<body class="hold-transition fixed skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="<?php echo base_url().$this->session->userdata('role'); ?>/dashboard" class="logo">
				<span class="logo-lg">
					<img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" style="max-width:100%;max-height:70px;padding:5px 0;">
				</span>
			</a>

			<nav class="navbar navbar-static-top">
				
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav link-visit">

						<li>
							<a href="<?php echo base_url(); ?>" target="_blank"> <i class="fa fa-sign-in" aria-hidden="true"></i> <span>Lihat Website</span></a>
						</li>
						<?php
						$base_url = base_url();
						$full_url = base_url(uri_string());
						$final_url = str_replace($base_url, "", $full_url);

						$final_url_other_arr = explode('/',$final_url);
						if(isset($final_url_other_arr[2])) {
							$final_url_other = $final_url_other_arr[0].'/'.$final_url_other_arr[1].'/'.$final_url_other_arr[2];

						} else {
							$final_url_other = $final_url_other_arr[0].'/'.$final_url_other_arr[1];
						}
						?>   

						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<?php if($this->session->userdata('photo') == ''): ?>
									<img src="<?php echo base_url(); ?>assets/img/user.png" class="user-image" alt="user photo">
									<?php else: ?>
										<img src="<?php echo base_url(); ?>assets/img/user.png" class="user-image" alt="user photo">
									<?php endif; ?>
									
									<span class="hidden-xs"></span>
								</a>
								<ul class="dropdown-menu">
									<li class="user-footer">
										<div style="text-align: left;
										margin: 10px;
										margin-bottom: 20px;">

										<img style="width: 50px; height: 50px; margin: 0; margin-right: 20px;" src="<?php echo base_url(); ?>assets/img/user.png" class="user-image" alt="user photo">


										<a href="#"><?php echo $this->session->userdata('full_name'); ?> </a>
									</div>
									<div style="margin-left: 69%;">
										<a href="<?php echo base_url(); ?>admin/login/logout">
											<i class="fa fa-sign-out" aria-hidden="true"></i> Log out
										</a>
									</div>
								</li>
							</ul>
						</li>

					</ul>
				</div>

			</nav>
		</header>

		<?php
		$base_url = base_url();
		$full_url = base_url(uri_string());
		$final_url = str_replace($base_url, "", $full_url);
		?>

		<aside class="main-sidebar">
			<section class="sidebar">

				<?php
				$final_url_other_arr = explode('/',$final_url);
				if(isset($final_url_other_arr[2])) {
					$final_url_other = $final_url_other_arr[0].'/'.$final_url_other_arr[1].'/'.$final_url_other_arr[2];

				} else {
					$final_url_other = $final_url_other_arr[0].'/'.$final_url_other_arr[1];
				}
				?>

				<ul class="sidebar-menu">
					<li class="treeview <?php if($final_url_other == 'admin'.'/wedding') {echo 'active';} ?>">
						<a href="<?php echo base_url(); ?>admin/wedding">
							<i class="fa fa-cogs" aria-hidden="true"></i><span>Data Pengantin</span>
						</a>
					</li>

					<li class="treeview <?php if(($final_url_other == 'admin'.'/guestbook') || ($final_url_other == 'admin'.'/guestbook/add') || ($final_url_other == 'admin'.'/guestbook/edit')) {echo 'active';} ?>">
						<a href="<?php echo base_url(); ?>admin/guestbook">
							<i class="fa fa-address-card-o" aria-hidden="true"></i><span>Data Guestbook</span>
						</a>
					</li>

				</ul>
			</section>
		</aside>

		<div class="content-wrapper">