<div class="container">
	<!-- /.menu -->
	<a href="#" class="fixed-button top"><i class="fa fa-chevron-up"></i></a>
	<a href="#" class="hidden-xs fixed-button email" data-toggle="modal" data-target="#modal-contact" data-section="modal-contact"><i class="fa fa-envelope-o"></i></a>

	<br></br>
	<div class="row">
		<!-- . Agent Box -->

		<!-- . Agent Box -->
		<?php foreach ($variabel as $row) : ?>
			<div class="col-sm-4 col-md-3">
				<div class="agent-box-card grey">
					<div class="image-content">
						<div class="image image-fill">
							<img src="<?= base_url('assets/imgprofile/') . $row->foto_user; ?>" alt="Image Sample" class="img-responsive" />
						</div>
					</div>
					<div class="info-agent">
						<span class="name"><?php echo $row->nama_user ?></span>
						<ul class="contact">
							<li><a href="#" class="icon"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="icon"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="icon"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="icon"><i class="fa fa-envelope-o"></i></a></li>
							<li><a href="" data-target="#Mfoto<?=$row->id_user ?>" data-toggle="modal" class="icon"><i class="fa fa-edit"></i></a></li>
						</ul>
					</div>
				</div>

				<ul class="block-menu">
					<li><a class="faq-button active" href="profile.html"><i class="icon fa fa-user"></i>
							Profile</a></li>
				</ul>
			</div>
			<div class="col-sm-8 col-md-9">

				<div class="row">
					<div class="col-md-10">
						<div class="section-title line-style no-margin">
							<h3 class="title">Informasi Umum</h3>			
						</div>

						<form class="form-vertical">
							<div class="form-group">
								<label for="first-name" class="col-sm-3 control-label">Nama :</label>
								<div class="col-sm-9 margin-form"><input id="first-name" class="form-control" type="text" placeholder="Nama" value="<?= $row->nama_user; ?>"></div>
							</div>
							<br></br>
							<div class="form-group">
								<label for="alamat_user" class="col-sm-3 control-label">Alamat User :</label>
								<div class="col-sm-9 margin-form"><input id="first-name" class="form-control" type="text" placeholder="Alamat_User" value="<?= $row->alamat_user; ?>"></div>
							</div>
							<br></br>
							<div class="form-group">
								<label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir :</label>
								<div class="col-sm-9 margin-form"><input id="first-name" class="form-control" type="text" placeholder="Tempat_Lahir" value="<?= $row->tempat_lahir; ?>"></div>
							</div>
							<br></br>
							<div class="form-group">
								<label for="tanggal_lahir" class="col-sm-3 control-label">Tanggal Lahir :</label>
								<div class="col-sm-9 margin-form"><input id="first-name" class="form-control" type="text" placeholder="Tanggal_Lahir" value="<?= $row->tanggal_lahir; ?>"></div>
							</div>
							<br></br>
							<div class="form-group">
								<label for="tanggal_daftar" class="col-sm-3 control-label">Tanggal Daftar :</label>
								<div class="col-sm-9 margin-form"><input id="first-name" class="form-control" type="text" placeholder="Tanggal_Daftar" value="<?= $row->tanggal_daftar; ?>"></div>
							</div>
							<br></br>
							<div class="form-group">
								<label for="tentang_user" class="col-sm-3 control-label">Tentang User :</label>
								<div class="col-sm-9 margin-form"><input id="first-name" class="form-control" type="text" placeholder="Tentang_User" value="<?= $row->tentang_user; ?>"></div>
							</div>
							<br></br>
							<div class="form-group">
								<label for="aktif_akun" class="col-sm-3 control-label">Aktif Akun :</label>
								<div class="col-sm-9 margin-form"><input id="first-name" class="form-control" type="text" placeholder="Aktif_Akun" value="<?= $row->aktif_akun; ?>"></div>
							</div>
							<br></br>
							<div class="form-group">
								<label for="status" class="col-sm-3 control-label">Status :</label>
								<div class="col-sm-9 margin-form"><input id="first-name" class="form-control" type="text" placeholder="Status" value="<?= $row->status; ?>"></div>
							</div>
						</form>
						<br></br>

						<div class="section-title line-style no-margin">
							<h3 class="title">Kontak Dasar</h3>
						</div>

						<form class="form-vertical">
							<div class="form-group">
								<label for="email" class="col-sm-3 control-label">Email :</label>
								<div class="col-sm-9 margin-form"><input id="first-name" class="form-control" type="text" placeholder="Email" value="<?= $row->email; ?>"></div>
							</div>
							<br></br>
							<div class="form-group">
								<label for="password" class="col-sm-3 control-label">Password :</label>
								<div class="col-sm-9 margin-form"><input id="first-name" class="form-control" type="password" placeholder="Password" value="<?= $row->password; ?>"></div>
							</div>
							<br></br>
							<div class="form-group">
								<label for="no_telepon" class="col-sm-3 control-label">No Telepon :</label>
								<div class="col-sm-9 margin-form"><input id="first-name" class="form-control" type="text" placeholder="No_Telepon" value="<?= $row->no_telepon; ?>"></div>
							</div>
						</form>
						<br></br>

						<!-- <div class="bs-callout callout-danger">
									<h4 class="title">Nullam sodales lorem sit amet</h4>
									<p class="text">Integer euismod cursus dolor. Curamet pellentesque sed, sodales at augue.</p>
								</div> -->
					</div>
				</div>
			</div>
			<br><br>
			<a href="<?php echo base_url('r_dataagen'); ?>" class="btn btn-success" style="float:right;">Simpan</a>
	</div>
</div>
</form>
<?php endforeach; ?>
</div>
</section>

<!-- /.modal-dialog -->
<!-- /.modal -->


<div class="modal fade" id="Mfoto<?= $row->id_user; ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>

		<div class="form-container full-fixed">
			<?php foreach ($variabel as $row) : ?>
				<form method="post" enctype="multipart/form-data" action="<?= base_url('c_dataagen/updatefoto'); ?>">
					<div id="form-modal-contact" class="box active modal-contact">
						<h2 class="title">Apakah anda ingin menambah?</h2>
						<div class="field">
							<input type="hidden" name="id_user" value="<?= $row->id_user ?>">
							<img src="<?= base_url('assets/imgprofile/' . $row->foto_user); ?>" width="50" height="50" alt="Fotouser">
						</div>
						<div class="field">
							<input id="foto_user" class="form-control" type="file" name="foto_user">
							<i class="fa fa-image"></i>
						</div>
						<div class="field footer-form text-right">
							<button type="button" class="btn btn-reverse button-form">Batal</button>
							<button type="submit" class="btn btn-default button-form">Simpan</button>
						</div>
					</div>
				</form>
			<?php endforeach; ?>
		</div>

</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
