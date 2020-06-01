<div class="container">
    <?php foreach ($variabel as $row) : ?>
        <section class="shortcode-box" id="shortcode-property">
            <div class="row">
                <div class="col-md-8">
                    <a href="<?= base_url('c_properti'); ?>" class="btn btn-success btn-sm">Tambah data</a>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian...">
                </div>
                <div class="col-md-1">
                    <button type="button" class="form-control btn btn-success">Cari</button>
                </div>
            </div>

            <br><br>
            <div class="section-title line-style no-margin">
                <h3 class="title"><?= $row->nama_user; ?></h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box-ads ">
                        <span class="price">Jumlah perumahan : 10 </span>

                        <span class="address"><i class="fa fa-home"></i> Perumahan Graha
                            <a href="#" class="btn btn-danger btn-xs " style="float: right">Hapus</a>
                            <a href="#" class="btn btn-warning btn-xs" style="float: right; margin-right:10px;">Edit</a>
                        </span>
                        <span class="description">No perumahan : 28 </span>
                        <span class="description">Kota : Malang</span>
                        <span class="description">Alamat : Panjen Jl.Welirang</span>
                        <br>
                        <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Lapangan" checked></div>
                        <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Keamanan" checked></div>
                        <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Pengelolahan sampah"></div>
                        <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Pengelolahan tandon"></div>
                        <div class="footer">
                            <a class="btn btn-light" href="property-detail.html">Selengkapnya</a>
                        </div>
                    </div><!-- /.box-ads -->
                </div><!-- /.col-md-12 -->
            </div>
        </section>
    <?php endforeach; ?>
    <div class="section-title line-style">
        <h3 class="title">Pemberitahuan</h3>
    </div>
    <div class="col-md-12">
        <label for="privacy">Privacy</label>
        <textarea class="margin-bottom form-control privacy" rows="3" name="privacy" id="privacy" disabled>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque quam ut fermentum ullamcorper. Pellentesque lobortis, ante vitae egestas venenatis, ante elit consectetur sem, sit amet auctor ex ligula sed mauris. Suspendisse tempor diam et hendrerit ullamcorper. Proin urna orci, pellentesque quis bibendum at, ultrices vulputate tortor. Integer ac ante diam. In et euismod nulla. Donec nibh nisl, egestas nec porta eu, hendrerit et urna.</textarea>
    </div>

</div><!-- END CONTAINER -->