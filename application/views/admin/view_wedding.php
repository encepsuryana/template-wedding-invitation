<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Informasi Wedding</h1>
	</div>
</section>

<section class="content" style="min-height:auto;margin-bottom: -30px;">
	<div class="row">
		<div class="col-md-12">
			<?php if($error): ?>
				<div class="callout callout-danger">
					<p><?php echo $error; ?></p>
				</div>
			<?php endif; ?>
			<?php if($success): ?>
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
			<div class="box box-info b-box">
				<div class="table-responsive">

					<?php echo form_open(base_url().'admin/wedding/update',array('class' => 'form-horizontal')); ?>

					<h3 class="seo-info">Kalimat Salam</h3>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Kalimat 1</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="kalimat_1" style="height:100px;"><?php echo $undangan['kalimat_1']; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Kalimat 2</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="kalimat_2" style="height:100px;"><?php echo $undangan['kalimat_2']; ?></textarea>
						</div>
					</div>

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

					<h3 class="seo-info">Acara, Waktu, Tempat</h3>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Acara 1</label>
						<div class="col-sm-9">
							<input type="text" name="acara_1" class="form-control" value="<?php echo $undangan['acara_1']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Waktu Acara 1</label>
						<div class="col-sm-9">
							<input type="text" name="waktu_acara_1" class="form-control" value="<?php echo $undangan['waktu_acara_1']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Acara 2</label>
						<div class="col-sm-9">
							<input type="text" name="acara_2" class="form-control" value="<?php echo $undangan['acara_2']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Waktu Acara 2</label>
						<div class="col-sm-9">
							<input type="text" name="waktu_acara_2" class="form-control" value="<?php echo $undangan['waktu_acara_2']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Hari Undangan</label>
						<div class="col-sm-9">
							<input type="text" name="hari_undangan" class="form-control" value="<?php echo $undangan['hari_undangan']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Tanggal Undangan</label>
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
						<label for="" class="col-sm-2 control-label">Kata-Kata Pernihakan </label>
						<div class="col-sm-9">
							<textarea name="kata_pernikahan" class="form-control" cols="30" rows="10" id="editor1"><?php echo $undangan['kata_pernikahan']; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Doa Pernikahan </label>
						<div class="col-sm-9">
							<textarea name="doa_pernikahan" class="form-control" cols="30" rows="10"><?php echo $undangan['doa_pernikahan']; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-2 control-label"></label>
						<div class="col-sm-9">
							<button type="submit" class="btn btn-success pull-left" name="form1">Update Informasi</button>
						</div>
					</div>

					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
