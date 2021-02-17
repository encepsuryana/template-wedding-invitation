<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Wedding of <?php echo $undangan['nama_lengkap_pria']; ?> & <?php echo $undangan['nama_lengkap_wanita']; ?></title>

	<!-- Font Awesome Icons -->
	<link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

	<link rel="stylesheet" href="https://npmcdn.com/sweetalert2@4.0.15/dist/sweetalert2.min.css">

	<!-- Theme CSS - Includes Bootstrap -->
	<link href="<?php echo base_url();?>assets/css/creative.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/creative.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

</head>

<body id="page-top">
	<?php if($error): ?>
		<div class="alert-error">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			<?php echo $error; ?>.
		</div>
	<?php endif; ?>
	<?php if($success): ?>
		<div class="alert-success">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			<?php echo $success; ?>.
		</div>
	<?php endif; ?>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
		<div class="container nav-name">

			<a class="navbar-brand js-scroll-trigger" href="#page-top"><?php echo $undangan['nama_panggilan_pria']; ?> & <?php echo $undangan['nama_panggilan_wanita']; ?></a>

			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto my-2 my-lg-0">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#invitation">Invitation</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#location">Location</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#guestbook">Guestbook</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Masthead -->
	<header class="masthead">
		<div class="container h-100">
			<div class="row h-100 align-items-center justify-content-center text-center">
				<div class="col-lg-8 align-self-end heading-style">
					<h2 class="text-white-75 font-weight-bold"><?php echo $undangan['kalimat_1']; ?> </h2>
				</div>
				<div class="col-lg-8 align-self-baseline heading-style">
					<p class="text-white-75 font-weight-light"><?php echo $undangan['kalimat_2']; ?> </p>
				</div>
				<div class="col-lg-8 align-self-baseline heading-style-name">
					<p class="text-white-75 font-weight-bold"><?php echo $undangan['nama_lengkap_pria']; ?> </p>

					<span class="text-white-75 font-weight-light"><?php echo $undangan['orangtua_pria']; ?> </span>
				</div>
				
				<div class="col-lg-8 align-self-baseline and-space and-style">
					<span class="text-white-75 font-weight-light">&</span>
				</div>

				<div class="col-lg-8 align-self-baseline heading-style-name">
					<p class="text-white-75 font-weight-bold"><?php echo $undangan['nama_lengkap_wanita']; ?> </p>

					<p style="font-family: 'La Belle Aurore', cursive !important; font-size: 17px !important;" class="mb-180 text-white-75 font-weight-light"><?php echo $undangan['orangtua_wanita']; ?> </p>
				</div>
			</div>
		</div>
	</header>

	<!-- Acara Section -->
	<section class="page-section page-section2 bg-primary" id="invitation">
		<div class="container">
			<div class="row justify-content-center">
				<div class="container text-center mb-50">
					<div class="row date-style">
						<div class="col-sm">
							<h2><?php echo $undangan['acara_1']; ?></h2>
							<p>
								<span><?php echo $undangan['waktu_acara_1']; ?></span>
							</p>
						</div>
						<div class="col-sm date-wedding-style">
							<h1><?php echo $undangan['hari_undangan']; ?></h1>
							<p>
								<h1><?php echo $undangan['tgl_undangan']; ?></h1>
							</p>
							<hr class="divider light my-4">
						</div>
						<div class="col-sm">
							<h2><?php echo $undangan['acara_2']; ?></h2>
							<p>
								<span><?php echo $undangan['waktu_acara_2']; ?></span>
							</p>
						</div>
					</div>
				</div>

				<div class="col-lg-8 text-center invitation-style">
					<h1>Tempat</h1>
					<h2 class="mb-4"><?php echo $undangan['ket_tempat']; ?></h2>
					<p class="mb-4"><?php echo $undangan['alamat_lengkap']; ?></p>

					<hr class="divider light my-4">
					
					<h4>Save the Date</h4>

					<a target="_blank" href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=NDVna2g4bGJvNGQ4Z3NzcXI5cWw5dTc5M2YgZW5jZXAuc3VyeWFuYWpyQG0&amp;tmsrc=encep.suryanajr%40gmail.com"><img border="0" src="https://www.google.com/calendar/images/ext/gc_button1_id.gif"></a>

				</div>
			</div>
		</div>
	</section>

	<!-- Lokasi Section -->
	<section class="pb-0 page-section invitation-maps" id="location">
		<h2>Lokasi Pernikahan</h2>
		<hr class="divider my-4">

		<div class="container wedding-maps">
			<?php echo $undangan['google_maps']; ?>
		</div>
	</section>

	<!-- Guestbook Section -->
	<section class="page-section" id="guestbook">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center guestbook-style">
					<h2 class="mt-0">Guestbook</h2>
					<hr class="divider my-4">
					<p class="text-muted mb-5"><?php echo $undangan['kata_pernikahan']; ?></p>
				</div>
			</div>
			<div class="row">
				<div class="container contact-form">

					<?php echo form_open_multipart(base_url(),array('class' => 'form-horizontal')); ?>

					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama" value="<?php if(isset($_POST['nama_lengkap'])){echo $_POST['nama_lengkap'];} ?>" />
								</div>
								<div class="form-group">
									<input type="text" name="kontak" class="form-control" placeholder="No. Telp/Kontak" value="<?php if(isset($_POST['kontak'])){echo $_POST['kontak'];} ?>" />
								</div>
								<div class="form-group">
									<input type="text" name="sosial_media" class="form-control" placeholder="Sosial Media" value="<?php if(isset($_POST['sosial_media'])){echo $_POST['sosial_media'];} ?>" />
								</div>
								<div class="form-group">
									<select name="hadir" class="form-control select2">
										<option value="Hadir">Hadir</option>
										<option value="Tidak">Tidak</option>
										<option value="Tidak">Mungkin</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<textarea name="ucapan" class="form-control" placeholder="Ucapan/Doa untuk kedua mempelai." style="width: 100%; height: 200px;"><?php if(isset($_POST['ucapan'])){echo $_POST['ucapan'];} ?></textarea>
								</div>
								<div class="form-group">
									<input id="btn-a" type="submit" name="form1" class="btnContact" value="Kirim Ucapan" />
								</div>
							</div>
						</div>
					</form>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="page-section " id="guestbook">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center guestbook-style">
					<h2 class="mt-0">Terima Kasih atas semua Ucapan/Do'a dari Kalian</h2>
					<hr class="divider my-4">
				</div>
			</div>
			<div class="row">
				<?php
				foreach ($guestbook as $row) {
					?>
					<div class="guestbook-card-style col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="box-part text-center">
							<div class="guestbook-card">
								<div class="title">
									<h2><?php echo $row['nama_lengkap']; ?></h2>
									<span><?php echo $row['kontak']; ?> / <?php echo $row['sosial_media']; ?></span>
									<p>(<?php echo $row['hadir']; ?>)</p>
									<hr class="divider my-4">

								</div>

								<div class="text">
									<span><?php echo $row['ucapan']; ?></span>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
				?>

			</div>	
		</div>
	</section>

	<!-- Doa Section -->
	<section class="page-section page-section2 bg-primary" id="invitation">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center invitation-style">
					<p class="mb-4">
						<?php echo $undangan['doa_pernikahan']; ?>
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="bg-light py-5">
		<div class="container">
			<div class="small text-center text-muted">Wedding of <?php echo $undangan['nama_lengkap_pria']; ?> & <?php echo $undangan['nama_lengkap_wanita']; ?></div>
		</div>
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

	<!-- Custom scripts for this template -->
	<script src="<?php echo base_url();?>assets/js/creative.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script> 

</body>

</html>
