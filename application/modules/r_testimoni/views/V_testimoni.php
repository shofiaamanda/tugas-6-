<section id="testimonial">
    <div class="section-detail hidden-xs">
        <h1><?= $menu; ?></h1>
    </div>
    <div class="container hidden-xs">
        <div class="row">
            <?php foreach ($variabel as $row) : ?>
                <div class="col-md-12">
                    <div class="row feedback-margin">
                        <div class="feedback-container" data-navigation="#feedback-nav">
                            <div class="crsl-wrap">
                                <figure class="crsl-item">
                                    <div class="feeddback-user">
                                        <div class="info-user">
                                            <span class="avatar">
                                                <img src="<?= base_url('assets/imgprofile/') . $row->foto_user; ?>" alt="Image Sample" class="img-responsive" />
                                            </span>
                                            <b><?= $row->nama_user; ?></b>
                                            <span><?= $row->alamat_user; ?></span>
                                        </div>
                                        <div class="message">
                                            <div class="content">
                                                <h3 class="title">
                                                    <i class="icon-quote fa fa-quote-left"></i>
                                                    Pembelian perumahan star4
                                                    <i class="icon-quote fa fa-quote-right"></i>
                                                </h3>
                                                <span class="rating">
                                                    <span>Rating:</span>
                                                    <?= $row->rating_testimoni; ?>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                                <p class="text-container">
                                                    <?= $row->testimoni; ?>
                                                    <br><br><br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </figure>

                            </div>
                            <div id="feedback-nav" class="nav-box">
                                <a href="#" class="previous"></a>
                                <a href="#" class="next"></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>