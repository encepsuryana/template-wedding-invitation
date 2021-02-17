<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Tambah Guestbook</h1>
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

			<?php echo form_open_multipart(base_url().'admin/guestbook/add',array('class' => 'form-horizontal')); ?>
			<div class="box box-info  b-box">
				<div class="box-body">

					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Nama <span>*</span></label>
						<div class="col-sm-8">
							<input type="text" autocomplete="off" class="form-control" name="nama_lengkap" value="<?php if(isset($_POST['nama_lengkap'])){echo $_POST['nama_lengkap'];} ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Ucapan <span>*</span></label>
						<div class="col-sm-8">
							<textarea class="form-control" name="ucapan" style="height:100px;"><?php if(isset($_POST['ucapan'])){echo $_POST['ucapan'];} ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label"></label>
						<div class="col-sm-6">
							<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
						</div>
					</div>

				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>