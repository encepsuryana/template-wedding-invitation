<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin/login');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Informasi Pernikahan</h1>
	</div>
</section>

<section class="content" style="min-height:auto;margin-bottom: -30px;">
	<div class="row">
		<div class="col-md-12">
			<?php if ($error) : ?>
				<div class="callout callout-danger">
					<p><?php echo $error; ?></p>
				</div>
			<?php endif; ?>
			<?php if ($success) : ?>
				<div class="callout callout-success">
					<p><?php echo $success; ?></p>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="nav-tabs-custom">
				<?php echo form_open(base_url() . 'admin/wedding/update', array('class' => 'form-horizontal')); ?>
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab_dtpengantin" data-toggle="tab">Data Pengantin</a></li>
					<li><a href="#tab_acarapernikahan" data-toggle="tab">Acara Pernikahan</a></li>
					<li><a href="#tab_klmtundangan" data-toggle="tab">Kalimat Undangan</a></li>
					<li><a href="#tab_doapernikahan" data-toggle="tab">Doa Pernikahan</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_dtpengantin">

						<h3 class="seo-info">Data Pengantin Pria</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nama Lengkap</label>
							<div class="col-sm-9">
								<input type="text" name="nama_lengkap_pria" class="form-control" value="<?php echo $undangan['nama_lengkap_pria']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nama Panggilan</label>
							<div class="col-sm-9">
								<input type="text" name="nama_panggilan_pria" class="form-control" value="<?php echo $undangan['nama_panggilan_pria']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Asal</label>
							<div class="col-sm-9">
								<input type="text" name="alamat_pria" class="form-control" value="<?php echo $undangan['alamat_pria']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nama Orang tua</label>
							<div class="col-sm-9">
								<input type="text" name="orangtua_pria" class="form-control" value="<?php echo $undangan['orangtua_pria']; ?>">
							</div>
						</div>


						<h3 class="seo-info">Data Pengantin Wanita</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nama Lengkap</label>
							<div class="col-sm-9">
								<input type="text" name="nama_lengkap_wanita" class="form-control" value="<?php echo $undangan['nama_lengkap_wanita']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nama Panggilan</label>
							<div class="col-sm-9">
								<input type="text" name="nama_panggilan_wanita" class="form-control" value="<?php echo $undangan['nama_panggilan_wanita']; ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Asal</label>
							<div class="col-sm-9">
								<input type="text" name="alamat_wanita" class="form-control" value="<?php echo $undangan['alamat_wanita']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nama Orang tua</label>
							<div class="col-sm-9">
								<input type="text" name="orangtua_wanita" class="form-control" value="<?php echo $undangan['orangtua_wanita']; ?>">
							</div>
						</div>
					</div>

					<div class="tab-pane" id="tab_klmtundangan">

						<h3 class="seo-info">Kalimat Undangan</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Judul</label>
							<div class="col-sm-9">
								<input type="text" name="kalimat_1" class="form-control" value="<?php echo $undangan['kalimat_1']; ?>">

							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Kalimat</label>
							<div class="col-sm-9">
								<textarea name="kalimat_2" class="form-control" cols="30" rows="10" id="editor3"><?php echo $undangan['kalimat_2']; ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Kata-Kata Undangan</label>
							<div class="col-sm-9">
								<textarea name="kata_pernikahan" class="form-control" cols="30" rows="10" id="editor1"><?php echo $undangan['kata_pernikahan']; ?></textarea>
							</div>
						</div>
					</div>

					<div class="tab-pane" id="tab_acarapernikahan">

						<h3 class="seo-info">Detail Acara</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Keterangan Akad</label>
							<div class="col-sm-9">
								<input type="text" name="acara_1" class="form-control" value="<?php echo $undangan['acara_1']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Waktu Akad</label>
							<div class="col-sm-9">
								<input type="text" name="waktu_acara_1" class="form-control" value="<?php echo $undangan['waktu_acara_1']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Keterangan Resepsi</label>
							<div class="col-sm-9">
								<input type="text" name="acara_2" class="form-control" value="<?php echo $undangan['acara_2']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Waktu Resepsi</label>
							<div class="col-sm-9">
								<input type="text" name="waktu_acara_2" class="form-control" value="<?php echo $undangan['waktu_acara_2']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Hari Pernikahan</label>
							<div class="col-sm-9">
								<input type="text" name="hari_undangan" class="form-control" value="<?php echo $undangan['hari_undangan']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tanggal Pernikahan</label>
							<div class="col-sm-9">
								<input type="text" name="tgl_undangan" class="form-control" value="<?php echo $undangan['tgl_undangan']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Ket. Tempat</label>
							<div class="col-sm-9">
								<input type="text" name="ket_tempat" class="form-control" value="<?php echo $undangan['ket_tempat']; ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Alamat Lengkap </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="alamat_lengkap" style="height:100px;"><?php echo $undangan['alamat_lengkap']; ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Google Maps </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="google_maps" style="height:100px;"><?php echo $undangan['google_maps']; ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Google Calendar </label>
							<div class="col-sm-9">
								<input type="text" name="google_calendar" class="form-control" value="<?php echo $undangan['google_calendar']; ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Google Map Direction </label>
							<div class="col-sm-9">
								<input type="text" name="google_map_direction" class="form-control" value="<?php echo $undangan['google_map_direction']; ?>">
							</div>
						</div>
					</div>

					<div class="tab-pane" id="tab_doapernikahan">
						<h3 class="seo-info">Doa Pernikahan</h3>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Doa Pernikahan </label>
							<div class="col-sm-9">
								<textarea name="doa_pernikahan" class="form-control" cols="30" rows="10" id="editor2"><?php echo $undangan['doa_pernikahan']; ?></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label"></label>
					<div class="col-sm-9">
						<button type="submit" class="btn btn-success pull-left" name="form_wedding">Update Informasi</button>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</section>