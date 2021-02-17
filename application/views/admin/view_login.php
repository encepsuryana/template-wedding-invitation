<?php if ($this->session->userdata('id')) {
	redirect(base_url().'admin/login');
} ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/datepicker3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/all.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/style.css">
	<style>
		.login-page {
			background-image: url(<?php echo base_url(); ?>assets/img/bg-masthead.jpg)!important;
		}
	</style>

</head>

<body class="hold-transition login-page sidebar-mini">
	<div class="login-box">
		<h4 class="login-box-msg">Settings Wedding data</h4>
		<div class="login-box-body">

			<?php
			if($error != '') {
				echo '<div class="error">'.$error.'</div>';
			}
			?>

			<?php echo form_open(base_url().'admin/login');?>
			<div class="form-group has-feedback">
				<input class="form-control" placeholder="Username" name="username" type="text" autocomplete="off" autofocus>
			</div>
			<div class="form-group has-feedback">
				<input class="form-control" placeholder="Password" name="password" type="password" autocomplete="off" value="">
			</div>
			<div class="row">
				<div class="col-xs-4">
					<div>
						<input type="submit" class="btn btn-primary btn-block btn-flat login-button" name="form1" value="Login">
					</div>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>

	<script src="<?php echo base_url(); ?>assets/admin/js/jquery-2.2.3.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/select2.full.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.inputmask.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.inputmask.date.extensions.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.inputmask.extensions.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/icheck.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/fastclick.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/demo.js"></script>
</body>
</html>