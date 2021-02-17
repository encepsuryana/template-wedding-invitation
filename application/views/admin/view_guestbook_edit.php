<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Guestbook</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/guestbook" class="btn btn-primary btn-sm">Lihat Semua</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">

			<?php if($error): ?>
				<div class="callout callout-danger">
					<p>
						<?php echo $error; ?>
					</p>
				</div>
			<?php endif; ?>

			<?php if($success): ?>
				<div class="callout callout-success">
					<p><?php echo $success; ?></p>
				</div>
			<?php endif; ?>

			<?php echo form_open(base_url().'admin/guestbook/edit/'.$guestbook['id'],array('class' => 'form-horizontal')); ?>

			<div class="box box-info b-box">
				<div class="box-body">
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Nama Lengkap <span>*</span></label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="nama_lengkap" value="<?php echo $guestbook['nama_lengkap']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Kontak <span>*</span></label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="kontak" value="<?php echo $guestbook['kontak']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Sosial Media <span>*</span></label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="sosial_media" value="<?php echo $guestbook['sosial_media']; ?>">
						</div>
					</div>

					<div class="form-group">
							<label for="" class="col-sm-2 control-label">Ucapan <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="ucapan" style="height:100px;"><?php echo $guestbook['ucapan']; ?></textarea>
							</div>
						</div>


					<div class="form-group">
						<label for="" class="col-sm-2 control-label"></label>
						<div class="col-sm-6">
							<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
						</div>
					</div>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>