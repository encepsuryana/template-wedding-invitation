<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Informasi Guestbook</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/guestbook/add" class="btn btn-primary btn-sm">Tambah Baru</a>
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


			<div class="box box-info  b-box">

				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Lengkap</th>
								<th>Kontak / Sosial media</th>
								<th width="300">Ucapan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							foreach ($guestbook as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['nama_lengkap']; ?></td>
									<td><?php echo $row['kontak']; ?> / <?php echo $row['sosial_media']; ?></td>
									<td><?php echo $row['ucapan']; ?></td>
									<td>
										<a href="<?php echo base_url(); ?>admin/guestbook/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="#" class="btn btn-danger btn-xs" data-href="<?php echo base_url(); ?>admin/guestbook/delete/<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
									</td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>


		</section>


		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
					</div>
					<div class="modal-body">
						Anda yakin ingin menghapus?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
