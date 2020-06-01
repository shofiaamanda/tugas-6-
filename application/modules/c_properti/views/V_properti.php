<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3" id="block-menu-content">
            <ul class="block-menu" data-spy="affix" data-offset-top="500" data-offset-bottom="400">
                <li><a class="faq-button active" href="#basic"><i class="icon fa fa-check-square-o"></i>Informasi</a></li>
                <li><a class="faq-button" href="#summary"><i class="icon fa fa-th-list"></i> Ringkasan </a>
                </li>
                <li><a class="faq-button" href="#images"><i class="icon fa fa-picture-o"></i> Gambar </a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-9">
            <?= form_open_multipart('c_properti/tambah'); ?>
            <div class="info-block" id="basic">
                <div class="section-title line-style no-margin">
                    <h3 class="title">Informasi</h3>
                </div>
                <div class="row">
                    <div class="col-md-6 space-form">
                        <input id="title" class="form-control" type="text" placeholder="Nama properti" name="nama_properti">
                    </div>
                    <div class="col-md-6 space-form">
                        <input id="address" class="form-control" type="text" placeholder="Alamat" name="alamat_properti">
                    </div>
                    <br><br>
                    <div class="col-md-12">
                        <textarea name="deskripsi_properti" id="description" class="form-control description" placeholder="Deskripsi"></textarea>
                    </div>
                </div>
            </div>
            <div class="info-block" id="summary">
                <div class="section-title line-style">
                    <h3 class="title">Ringkasan</h3>
                </div>

                <div class="row">
                    <div class="col-md-4 space-form">
                        <input id="title" class="form-control" type="number" placeholder="Harga properti" name="harga_properti">
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Luas tanah" name="luas_tanah" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">m2</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Luas properti" name="luas_properti" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">m2</span>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-md-4 space-form">
                        <input type="text" class="form-control" name="tipe_properti" placeholder="Tipe perumahan">
                        <!-- <select class="dropdown" data-settings='{"cutOff": 5}'>
                                <option value="">Tipe perumahan</option>
                                <option value="apartments">Apartments</option>
                                <option value="condos">Condos</option>
                                <option value="duplex">Duplex</option>
                                <option value="houses">Houses</option>
                                <option value="offices">Offices</option>
                                <option value="retail">Retail</option>
                                <option value="villa">Villa</option>
                            </select> -->
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" type="number" name="tempat_tidur" placeholder="Tempat tidur" />
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" type="number" name="tempat_mandi" placeholder="Tempat mandi" />
                    </div>
                    <br><br>
                    <div class="col-md-4">
                        <input class="form-control" type="text" name="kota_properti" placeholder="Kota" />
                    </div>
                </div>
            </div>
            <div class="info-block" id="images">
                <div class="section-title line-style">
                    <h3 class="title">Gambar</h3>
                </div>
                <form action="#" method="post"></form>
                <span class="text">
                    <strong>Tambah gambar</strong> Klik<strong> Choose File</strong> <br>
                </span>
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2"><input type="file" class="form-control" name="foto1_properti"></span>
                </div>
                <br></br>
                <button type="submit" class="btn btn-success btn-block float-right" style="float:right;">Tambah</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>