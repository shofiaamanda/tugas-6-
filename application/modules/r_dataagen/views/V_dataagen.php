 <div class="container">

     <div class="row">
         <div class="col-md-9">
             <?php foreach ($variabel as $row) : ?>
                 <a href="<?php echo base_url('c_dataagen'); ?>" class="btn btn-success">Tambah</a>
             <?php endforeach; ?>
         </div>
         <div class="col-md-2">
             <form>
                 <input class="form-control" type="text" placeholder="search..." required>
             </form>
         </div>
         <div class="col-md-1">
             <form>
                 <button type="button" class="btn btn-default search-button">CARI</button> <br> </br>
             </form>
         </div>
         <br><br>
         <table class="table table-hover table-bordered">
             <tr>
                 <th>No</th>
                 <th>Nama</th>
                 <th>Email</th>
                 <th>Image</th>
                 <th>No Telepon</th>
                 <th>Alamat</th>
                 <th>Tanggal lahir</th>
                 <th>Tempat Lahir</th>
                 <th>Tentang User</th>
                 <th>Tanggal Daftar</th>
                 <th>Aktif Akun</th>
                 <th>Status</th>
                 <th>Setting</th>
             </tr>
             <?php foreach ($variabel  as $row) : ?>
                 <tr>
                     <td>1</td>
                     <td><?php echo $row->nama_user ?></td>
                     <td><?php echo $row->email ?></td>
                     <td><img src="<?= base_url('assets/imgprofile/') . $row->foto_user; ?>" alt="Image Sample" class="img-responsive" width="50" height="50" /></td>
                     <td><?php echo $row->no_telepon ?></td>
                     <td><?php echo $row->alamat_user ?></td>
                     <td><?php echo $row->tanggal_lahir ?></td>
                     <td><?php echo $row->tempat_lahir ?></td>
                     <td><?php echo $row->tentang_user ?></td>
                     <td><?php echo $row->tanggal_daftar ?></td>
                     <td><?php echo $row->aktif_akun ?></td>
                     <td><?php echo $row->status ?></td>
                     <td>
                         <?php echo anchor('u_dataagen/detail/' . $row->id_user, '<button type="button" class="btn btn-warning">Detail</button>') ?>
                         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalhapus<?= $row->id_user ?>">Hapus</button>
                     </td>
                 </tr>
             <?php endforeach; ?>
         </table>
     </div>
 </div>



 <div class="container" id="pagination">
     <div class="row">
         <div class="col-md-9">
             <ul class="pagination">
                 <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                 <li><a class="active" href="#">1</a></li>
                 <li><a href="#">2</a></li>
                 <li><a href="#">3</a></li>
                 <li><a class="no-active">...</a></li>
                 <li><a href="#">9</a></li>
                 <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
             </ul>
         </div>
     </div>
 </div><!-- ./container -->
 <br><br>


 <!-- hapus -->
 <div class="modal fade" id="#modalhapus<?= $row->id_user; ?>" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>

         <!--Modal header-->
         <div class="modal-header">
             <?php foreach ($variabel as $row) : ?>
                 <form method="post" enctype="multipart/form-data" action="<?= base_url('r_dataagen/hapus'); ?>">
                     <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                     <h4 class="modal-title">Hapus</h4>
         </div>

         <!--Modal body-->
         <div class="modal-body">
             <p class="text-semibold text-main"></p>
             <p>Anda Yakin Ingin Menghapus <b><?php echo $res->nama_user ?></b> ? </p>
             <br>



         </div>

         <!--Modal footer-->
         <div class="modal-footer">
             <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
             <a class="btn btn-danger" href="<?php echo base_url('r_dataagen/hapus/' . $res->id_user) ?>">Hapus user</a>
         </div>
     </div>
     </form>
 <?php endforeach; ?>
 </div>
 </div>
 <!-- end hapus -->