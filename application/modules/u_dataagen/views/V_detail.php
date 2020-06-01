<section id="user-profile">
	<div class="container">
		<div class="row">
			<?php foreach ($variabel as $row) : ?>
				<div class="col-sm-4 col-md-3">
					<!-- . Agent Box -->
					<div class="agent-box-card grey">
						<div class="image-content">
							<div class="image image-fill">
								<img alt="Image Sample" src="<?= base_url('assets/imgprofile/') . $row->foto_user; ?>">
							</div>
						</div>
						<div class="info-agent">
							<span class="name"><?= $row->nama_user; ?></span>
							<div class="contact">
								<li><a href="#" class="icon"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="icon"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="icon"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="icon"><i class="fa fa-envelope-o"></i></a></li>
								<li><a href="" data-target="#Mfoto<?= $row->id_user ?>" data-toggle="modal" class="icon"><i class="fa fa-edit"></i></a></li>
							</div>
						</div>
					</div>
					<br />
					<ul class="block-menu">
						<li><a class="faq-button active" href="profile.html"><i class="icon fa fa-user"></i>Profil</a></li>

					</ul>
				</div>
				<div class="col-sm-8 col-md-9">
					<div class="row">
						<div class="col-md-10">
							<?= $this->session->flashdata('message'); ?>
							<div class="section-title line-style no-margin">
								<h3 class="title">Informasi Umum</h3>
								<i class="icon fa fa-cog" data-toggle="modal" style="float: right" data-target="#modalEditProfil<?= $row->id_user ?>"> Edit Profil</i>
							</div>
							<ul class="profile">
								<li>
									<span>Nama :</span><?= $row->nama_user; ?>
								</li>
								<li>
									<span>Alamat :</span><?= $row->alamat_user; ?>
								</li>
								<li>
									<span>Tempat Lahir :</span> <?= $row->tempat_lahir; ?>
								</li> 
								<li>
									<span>Tanggal Lahir :</span> <?= $row->tanggal_lahir; ?>
								</li> 
								<li>
									<span>Tentang User :</span> <?= $row->tentang_user; ?>
								</li> 
								<li>
									<span>Tanggal Daftar :</span> <?= $row->tanggal_daftar; ?>
								</li>
								<li>
									<span>Aktif Akun :</span> <?= $row->aktif_akun; ?>
								</li>  
								<li>
									<span>Status :</span> <?= $row->status; ?>
								</li> 
							</ul>
							<div class="section-title line-style">
								<h3 class="title">Kontak Dasar</h3>
								<i class="icon fa fa-cog" data-toggle="modal" style="float: right" data-target="#modalEditAkun<?= $row->id_user ?>"> Edit Akun</i>
							</div>
							<ul class="profile">
								<li>
									<span>Email :</span>
									<?= $row->email; ?>
									<i class="set-privacy fa fa-lock"></i>
								</li>
								<li>
									<span>Password : </span> <?= $row->password; ?>
								</li>
								<li>
									<span>No.Telepon :</span>
									<?= $row->no_telepon; ?>
								</li>
								<li>
									<span>No whatsapp :</span>
									<?= $row->no_whatsapp; ?>
								</li>
							</ul>
							<br></br>
							<a href="../../r_dataagen" class="btn btn-success float-right" style="float:right;">Simpan</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	</div>
</section>
<!-- /.modal-dialog -->
<!-- /.modal -->






<div class="modal fade" id="modalEditProfil<?= $row->id_user; ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>

		<div class="form-container full-fixed">
			<?php foreach ($variabel as $row) : ?>
				<form method="post" action="<?= base_url('u_dataagen/update') ?>">
					<div id="form-modal-contact" class="box active modal-contact">
						<h2 class="title">Apakah anda ingin mengedit?</h2>
						<div class="field">
							<input type="hidden" name="id_user" value="<?= $row->id_user ?>">
							<input id="nama_user" class="form-control" type="text" name="nama_user" placeholder="Nama" value="<?= $row->nama_user; ?>">
							<i class="fa fa-user"></i>
						</div>
						<div class="field">
							<input id="alamat_user" class="form-control" type="text" name="alamat_user" placeholder="Nama" value="<?= $row->alamat_user; ?>">
							<i class="fa fa-address-card"></i>
						</div>
						<div class="field">
							<input id="tempat_lahir" class="form-control" type="text" name="tempat_lahir" placeholder="Nama" value="<?= $row->tempat_lahir; ?>">
							<i class="fa fa-tag"></i>
						</div>
						<div class="field">
							<input id="tanggal_lahir" class="form-control" type="number" name="tanggal_lahir" placeholder="Nama" value="<?= $row->tanggal_lahir; ?>">
							<i class="fa fa-tag"></i>
						</div>
						<div class="field">
							<input id="tentang_user" class="form-control" type="text" name="tentang_user" placeholder="Nama" value="<?= $row->tentang_user; ?>">
							<i class="fa fa-tag"></i>
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


<div class="modal fade" id="Mfoto<?= $row->id_user; ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>

		<div class="form-container full-fixed">
			<?php foreach ($variabel as $row) : ?>
				<form method="post" enctype="multipart/form-data" action="<?= base_url('u_dataagen/updatefoto'); ?>">
					<div id="form-modal-contact" class="box active modal-contact">
						<h2 class="title">Apakah anda ingin mengedit?</h2>
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


<div class="modal fade" id="modalEditAkun<?= $row->id_user; ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>

		<div class="form-container full-fixed">
			<?php foreach ($variabel as $row) : ?>
				<form method="post" action="<?= base_url('u_dataagen/update') ?>">
					<div id="form-modal-contact" class="box active modal-contact">
						<h2 class="title">Apakah anda ingin mengedit?</h2>
						<div class="field">
							<input id="no_telepon" class="form-control" type="number" name="no_telepon" placeholder="Nama" value="<?= $row->no_telepon; ?>">
							<i class="fa fa-phone"></i>
						</div>
						<div class="field">
							<input id="no_whatsapp" class="form-control" type="number" name="no_whatsapp" placeholder="Nama" value="<?= $row->no_whatsapp; ?>">
							<i class="fa fa-whatsapp"></i>
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