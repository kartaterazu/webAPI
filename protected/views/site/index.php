<!-- Content -->
<section class="main-slider">
    <div class="owl-carousel" id="main-slider">
        <?php
            foreach ($slider as $sliders)
            {
        ?>
                <div class="item" style="background-image:url('/images/slider/<?php echo $sliders->gambar; ?>');">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="inner-slider">
                                    <?php
                                        if(!empty($sliders->label))
                                        {
                                    ?>
                                            <span class="promo-label"><?php echo $sliders->label; ?></span>
                                    <?php
                                        }

                                        if(!empty($sliders->title))
                                        {
                                    ?>
                                            <h1 class="promo-title"><?php echo $sliders->title; ?></h1>
                                    <?php
                                        }

                                        if(!empty($sliders->subtitle))
                                        {
                                    ?>
                                            <div class="promo-subtitle text-ungu"><?php echo $sliders->subtitle; ?></div>
                                    <?php
                                        }

                                        if(!empty($sliders->link))
                                        {
                                    ?>
                                            <a href="<?php echo !empty($sliders->link) ? $sliders->link : '#'; ?>" class="btn btn-putih btn-bordered mt20">Selengkapnya <i class="lnr lnr-chevron-right"></i></a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>
    </div>
    <div class="container main-slider-nav">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="mainNext"><i class="icon-arrow-right"></i></div>
                <div class="mainPrev"><i class="icon-arrow-left"></i></div>
            </div>
        </div>
    </div>
    <div class="container search-container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="search-alt">
                    <form action="/product">
                        <h4>Cari Paket Perjalanan</h4>
                        <!-- <input type="hidden" name="submit">
                        <input type="hidden" name="tipe">
                        <div class="form-group">
                            <label for="kategori" class="label-search">Paket Perjalanan</label>
                            <div class="select" id="kategori" style="width:100%;">
                                <?php
                                /*$mitra = array('umroh'=>'Umrah', 'dauroh'=>'Wisata Kajian', 'business'=>'Perjalanan Bisnis', 'travel'=>'Wisata Indonesia', 'travel1'=>'Wisata Mancanegara');
                                echo CHtml::dropDownList(
                                     'kategori',
                                     '',
                                     $mitra, 
                                     array(
                                         'empty'=>'Pilih Paket Perjalanan',
                                         'class'=>'form-control light',
                                         'id'=>'umroh-kategori',
                                     )       
                                );*/
                                ?>
                                <span class="bar"></span>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="datepicker" class="label-search">Tanggal Keberangkatan</label>
                            <input type="text" name="tanggal" class="form-control light" placeholder="Pilih Tanggal" id="datepicker"/>
                            <span class="bar"></span>
                        </div>-->
                        <div class="form-group">
                            <label for="nama-paket" class="label-search">Destinasi atau Katakunci</label>
                            <input type="text" name="judul" class="form-control light" id="nama-paket" placeholder="e.g. : Umrah, Bali, Spanyol, ekonomis..." required="required" />
                            <span class="bar"></span>
                        </div>
                        <div class="form-group">
                            <label for="bulan" class="label-search">Pilih Bulan</label>
                            <div class="select" id="bulan" style="width:100%;">
                                <?php
                                $mitra = array('01'=>'Januari', '02'=>'Februari', '03'=>'Maret', '04'=>'April', '05'=>'Mei', '06'=>'Juni', '07'=>'Juli', '08'=>'Agustus', '09'=>'September', '10'=>'Oktober', '11'=>'November', '12'=>'Desember');
                                echo CHtml::dropDownList(
                                     'bulan',
                                     '',
                                     $mitra, 
                                     array(
                                         'empty'=>'Pilih Berdasarkan Bulan',
                                         'class'=>'form-control light',
                                         'id'=>'bulan',
                                         'required'=>'required'
                                     )       
                                );
                                ?>
                                <span class="bar"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tahun" class="label-search">Pilih Tahun</label>
                            <div class="select" id="tahun" style="width:100%;">
                                <?php
                                $tahun = array('2017'=>'2017', '2018'=>'2018');
                                echo CHtml::dropDownList(
                                     'tahun',
                                     '',
                                     $tahun, 
                                     array(
                                         'empty'=>'Pilih Berdasarkan Tahun',
                                         'class'=>'form-control light',
                                         'id'=>'tahun',
                                         'required'=>'required'
                                     )       
                                );
                                ?>
                                <span class="bar"></span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-hijau btn-block">CARI PAKET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Paket Perjalanan -->
<section class="section-category">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-title">
                    <h3>Silahkan pilih kategori perjalanan yang anda inginkan</h3>
                    <small>Pilihan travel halal terlengkap dan berkualitas</small>
                    <img data-original="/images/title-line.png" alt="line" class="lazy" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                <a href="/umroh" class="category-banner">
                    <img data-original="/images/category/Umroh.jpg" alt="Umrah" class="lazy">
                    <span class="title">Umrah</span>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                <a href="/product?submit=travel&tipe=1" class="category-banner">
                    <img data-original="/images/category/Mancanegara.jpg" alt="Wisata Mancanegara" class="lazy" />
                    <span class="title dua-baris">Wisata<br/>Mancanegara</span>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                <a href="/product?submit=travel&tipe=0" class="category-banner">
                    <img data-original="/images/category/Lokal.jpg" alt="Wisata Indonesia" class="lazy" />
                    <span class="title dua-baris">Wisata<br/>Indonesia</span>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                <a href="/business" class="category-banner">
                    <img data-original="/images/category/Bisnis.jpg" alt="Perjalanan Bisnis" class="lazy" />
                    <span class="title dua-baris">Perjalanan<br/>Bisnis</span>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                <a href="/product?submit=travel&tipe=2" class="category-banner">
                    <img data-original="/images/category/Education.jpg" alt="Wisata Kajian" class="lazy" />
                    <span class="title dua-baris">Pendidikan</span>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                <a href="/item?id_kategori=2" class="category-banner">
                    <img data-original="/images/category/HalalMarket.jpg" alt="Wisata Kajian" class="lazy" />
                    <span class="title dua-baris">JalanHalal<br/>Market</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="section-popular">
    <div class="container">
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="section-title">
                <h3>Paket Terpopuler</h3>
                <small>Dapatkan paket terpopuler dengan harga terbaik</small>
                <img class="lazy" data-original="images/title-line.png" alt="line"/>
            </div>
        </div>
        </div>
        <div class="row">
            <?php //Paket Umroh terpopuler
            if($populer_umroh)
            {
                foreach($populer_umroh as $umroh_populer)
                {
                    $list_id_penerbangan    = explode(",", $umroh_populer->id_penerbangan);
                    $nama_penerbangan       = "";

                    if(!empty($list_id_penerbangan))
                    {
                        $penerbangan        = Penerbangan::model()->findByPK($list_id_penerbangan[1]);
                        $nama_penerbangan   = $penerbangan->nama_penerbangan;
                    }

                    $list_id_hotel    = explode(",", $umroh_populer->id_hotel);
                    $nama_hotel       = "";

                    if(!empty($list_id_hotel) && isset($list_id_hotel[1]))
                    {
                        $hotel        = Hotel::model()->findByPK($list_id_hotel[1]);
                        $nama_hotel   = $hotel->nama_hotel;
                    }

                    if($umroh_populer->quad != 0)
                    {
                        $harga_tayang = $umroh_populer->quad;
                    }
                    elseif($umroh_populer->quad == 0 && $umroh_populer->triple != 0)
                    {
                        $harga_tayang = $umroh_populer->triple;
                    }
                    elseif($umroh_populer->triple == 0 && $umroh_populer->harga != 0)
                    {
                        $harga_tayang = $umroh_populer->harga;
                    }
                    else
                    {
                        $harga_tayang = $umroh_populer->quad;
                    }
            ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="card catalog">
                            <div class="catalog-tn">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/umroh/detail/<?php echo $umroh_populer->title_slug; ?>">
                                    <img data-original="<?php echo Yii::app()->request->baseUrl; ?>/images/umroh/<?php echo $umroh_populer->gambar; ?>" alt="<?php echo $umroh_populer->judul; ?>" class="lazy" />
                                </a>
                                <!-- <span class="btn-wishlist"><i class="lnr lnr-heart"></i></span> -->
                                <ul class="detail-package">
                                    <li><i class="icon icon-calendar"></i> <?php echo $umroh_populer->jumlah_hari; ?> Days</li>
                                    <?php
                                    if(!empty($nama_penerbangan))
                                    {
                                    ?>
                                        <li><i class="icon icon-plane"></i> <?php echo $nama_penerbangan; ?></li>
                                    <?php
                                    }

                                    if(!empty($nama_hotel))
                                    {
                                    ?>
                                    <li><i class="lnr lnr-apartment"></i> <?php echo $nama_hotel; ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="package-info">
                                <span class="package-title"><?php echo $umroh_populer->judul; ?></span>
                                <span class="travel-agent"><?php echo $umroh_populer->call_agent->perusahaan; ?></span>
                                <span class="price-tn"><img class="lazy" data-original="/images/rupiah_20.png" style="margin-bottom: 0px;" /> <?php echo number_format($harga_tayang,0,".","."); ?></span>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            
            //Paket Wisata Indonesia terpopuler
            if($indonesia)
            {
                foreach($indonesia as $wisata_indonesia)
                {
                    $list_id_penerbangan    = explode(",", $wisata_indonesia->id_penerbangan);
                    $nama_penerbangan       = "";

                    if(!empty($list_id_penerbangan) && isset($list_id_penerbangan[1]))
                    {
                        $penerbangan        = Penerbangan::model()->findByPK($list_id_penerbangan[1]);
                        $nama_penerbangan   = $penerbangan->nama_penerbangan;
                    }

                    $list_id_hotel    = explode(",", $wisata_indonesia->id_hotel);
                    $nama_hotel       = "";

                    if(!empty($list_id_hotel) && isset($list_id_hotel[1]))
                    {
                        $hotel        = Hotel::model()->findByPK($list_id_hotel[1]);
                        $nama_hotel   = $hotel->nama_hotel;
                    }

                    $harga_tayang = $wisata_indonesia->harga;
            ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="card catalog">
                            <div class="catalog-tn">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/travel/detail/<?php echo $wisata_indonesia->title_slug; ?>">
                                    <img data-original="<?php echo Yii::app()->request->baseUrl; ?>/images/travel/<?php echo $wisata_indonesia->gambar; ?>" alt="<?php echo $wisata_indonesia->judul; ?>" class="lazy" />
                                </a>
                                <!-- <span class="btn-wishlist"><i class="lnr lnr-heart"></i></span> -->
                                <ul class="detail-package">
                                    <?php
                                    if(!empty($nama_penerbangan))
                                    {
                                    ?>
                                        <li><i class="icon icon-plane"></i> <?php echo $nama_penerbangan; ?></li>
                                    <?php
                                    }

                                    if(!empty($nama_hotel))
                                    {
                                    ?>
                                    <li><i class="lnr lnr-apartment"></i> <?php echo $nama_hotel; ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="package-info">
                                <span class="package-title"><?php echo $wisata_indonesia->judul; ?></span>
                                <span class="travel-agent"><?php echo $wisata_indonesia->call_agent->perusahaan; ?></span>
                                <span class="price-tn"><img class="lazy" data-original="/images/rupiah_20.png" style="margin-bottom: 0px;" /> <?php echo number_format($harga_tayang,0,".","."); ?></span>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            
            //Paket Wisata Mancanegara terpopuler
            if($mancanegara)
            {
                foreach($mancanegara as $wisata_mancanegara)
                {
                    $list_id_penerbangan    = explode(",", $wisata_mancanegara->id_penerbangan);
                    $nama_penerbangan       = "";

                    if(!empty($list_id_penerbangan) && isset($list_id_penerbangan[1]))
                    {
                        $penerbangan        = Penerbangan::model()->findByPK($list_id_penerbangan[1]);
                        $nama_penerbangan   = $penerbangan->nama_penerbangan;
                    }

                    $list_id_hotel    = explode(",", $wisata_mancanegara->id_hotel);
                    $nama_hotel       = "";

                    if(!empty($list_id_hotel) && isset($list_id_hotel[1]))
                    {
                        $hotel        = Hotel::model()->findByPK($list_id_hotel[1]);
                        $nama_hotel   = $hotel->nama_hotel;
                    }

                    $harga_tayang = $wisata_mancanegara->harga;
            ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="card catalog">
                            <div class="catalog-tn">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/travel/detail/<?php echo $wisata_mancanegara->title_slug; ?>">
                                    <img data-original="<?php echo Yii::app()->request->baseUrl; ?>/images/travel/<?php echo $wisata_mancanegara->gambar; ?>" alt="<?php echo $wisata_mancanegara->judul; ?>" class="lazy" />
                                </a>
                                <!-- <span class="btn-wishlist"><i class="lnr lnr-heart"></i></span> -->
                                <ul class="detail-package">
                                    <?php
                                    if(!empty($nama_penerbangan))
                                    {
                                    ?>
                                        <li><i class="icon icon-plane"></i> <?php echo $nama_penerbangan; ?></li>
                                    <?php
                                    }

                                    if(!empty($nama_hotel))
                                    {
                                    ?>
                                    <li><i class="lnr lnr-apartment"></i> <?php echo $nama_hotel; ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="package-info">
                                <span class="package-title"><?php echo $wisata_mancanegara->judul; ?></span>
                                <span class="travel-agent"><?php echo $wisata_mancanegara->call_agent->perusahaan; ?></span>
                                <span class="price-tn"><img class="lazy" data-original="/images/rupiah_20.png" style="margin-bottom: 0px;" /> <?php echo number_format($harga_tayang,0,".","."); ?></span>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
  
<!-- Why Us -->
<section class="why-us">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-title">
                    <h3>Mengapa Pilih Kami</h3>
                    <small>Temukan Alasan Terbaik Sebagai Pilihan Anda</small>
                    <img src="images/title-line.png" alt="line"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 why-content">
                <div class="why-icon"><i class="icon-shield"></i></div>
                <div class="why-title">Jaminan 100% Aman</div>
                <div class="why-desc">Payment system JalanHalal menjamin keamanan uang Anda dalam bertransaksi.</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 why-content">
                <div class="why-icon"><i class="icon-earphones-alt"></i></div>
                <div class="why-title">Customer Suport yang Responsif</div>
                <div class="why-desc">CS JalanHalal siap membantu Anda melalui e-mail, media sosial dan call center.</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 why-content">
                <div class="why-icon"><i class="icon-wallet"></i></div>
                <div class="why-title">Kemudahan Pembayaran</div>
                <div class="why-desc">JalanHalal menyediakan berbagai metode pembayaran untuk bertransaksi.</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 why-content">
                <div class="why-icon"><i class="icon-screen-smartphone"></i></div>
                <div class="why-title">Kemudahan Akses Mobile</div>
                <div class="why-desc">Buka JalanHalal.com di Web Browser Android dan iOS untuk kemudahan Anda.</div>
            </div>
        </div>
    </div>
</section>

<!-- Promo -->
<section class="section-promo">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-title">
                    <h3>Deals &amp; Promo</h3>
                    <small>Promo dan Deals Terbaik</small>
                    <img class="lazy" data-original="images/title-line.png" alt="line"/>
                </div>
            </div>
            <!-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mb30">
                <div class="banner-wrapper rectangle-banner">
                    <img src="images/empty-rectangle.png" alt="" class="banner-bg"/>
                    <div class="content-banner">
                    <img src="images/dummy.jpg" alt=""/>
                    </div>
                </div>
            </div> -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mb30">
                <?php 
                foreach($promo1 as $p1)
                {
                ?>
                    <div class="banner-wrapper">
                        <a href="<?php echo $p1->link ?>">
                            <img alt="<?php echo isset($p1->gambar_alt) ? $p1->gambar_alt : $p1->gambar; ?>" class="banner-bg lazy" data-original="<?php echo Yii::app()->request->baseurl ?>/images/promo/<?php echo $p1->gambar ?>" />
                        </a>
                    </div>
                <?php 
                }
                ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mb30">
                <?php 
                foreach($promo2 as $p2)
                {
                ?>
                    <div class="banner-wrapper">
                        <a href="<?php echo $p2->link ?>">
                            <img data-original="<?php echo Yii::app()->request->baseurl ?>/images/promo/<?php echo $p2->gambar ?>" alt="<?php echo isset($p2->gambar_alt) ? $p2->gambar_alt : $p2->gambar; ?>" class="banner-bg lazy"/>
                        </a>
                    </div>
                <?php 
                }
                ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <?php 
                foreach($promo3 as $p3)
                {
                ?>
                    <div class="banner-wrapper mb30">
                        <a href="<?php echo $p3->link ?>">
                            <img data-original="/images/promo/<?php echo $p3->gambar ?>" alt="<?php echo isset($p3->gambar_alt) ? $p3->gambar_alt : $p3->gambar; ?>" class="banner-bg lazy"/>
                        </a>
                    </div>
                <?php 
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Iklan 
<section class="section-iklan">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mb30">
                <div class="banner-wrapper rectangle-banner">
                    <img src="images/empty-rectangle.png" alt="" class="banner-bg"/>
                    <div class="content-banner">
                        <img src="http://halalouting.com/wp-content/uploads/2016/05/Eithad-Airways.jpg" alt=""/>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mb30">
                <div class="banner-wrapper rectangle-banner">
                    <img src="images/empty-rectangle.png" alt="" class="banner-bg"/>
                    <div class="content-banner">
                        <img src="https://media.go2speed.org/brand/files/mataharimall/27/SLR-300x250.jpg" alt=""/>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mb30">
                <div class="banner-wrapper rectangle-banner">
                    <img src="images/empty-rectangle.png" alt="" class="banner-bg"/>
                    <div class="content-banner">
                        <img src="https://developer.apple.com/library/content/documentation/UserExperience/Conceptual/iTunesRadioAdGuide/Art/ch4_3mrec-banner.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
  
<!-- Promo -->
<section class="section-partners">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-title">
                    <h3>Travel Agent yang Terdaftar</h3>
                    <img class="lazy" data-original="images/title-line.png" alt="line"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="mitraNext"><i class="lnr lnr-chevron-right"></i></div>
                <div class="mitraPrev"><i class="lnr lnr-chevron-left"></i></div>
                <div class="owl-carousel" id="mitra-slider">
                    <?php
                    if(!empty($data_mitra))
                    {
                        foreach ($data_mitra as $mitra)
                        {
                    ?>
                            <div class="item">
                                <div class="partner-tn" data-toggle="modal" data-target="<?php echo '#'.str_replace(array(' ','&','.'),"_",$mitra->perusahaan); ?>" id="<?php echo $mitra->perusahaan; ?>">
                                    <img class="mitra-home lazy" data-original="images/mitra_jalhal/<?php echo $mitra->logo; ?>" alt="<?php echo str_replace(' ','_',$mitra->logo); ?>" style="height: 183px;">
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php
                if(!empty($data_mitra))
                {
                    foreach ($data_mitra as $mitra)
                    {
                ?>      
                        <!-- Modal -->
                        <div class="modal fade modal-mitra" id="<?php echo str_replace(array(' ','&','.'),'_',$mitra->perusahaan); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalGallery">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <button class="close-mitra" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> Tutup</button>
                                    <div class="modal-body">
                                        <div class="mitra-title">
                                            <img src="<?php echo Yii::app()->baseUrl."/images/mitra_jalhal/".$mitra->logo; ?>" alt="<?php echo $mitra->perusahaan; ?>" class="partner-tn" style="width:120px; margin:20px auto;" />
                                            <h3><?php echo $mitra->perusahaan; ?></h3>
                                            <div class="form-group">
                                                <label for="">No. Izin</label>
                                                <div class="form-info"><?php echo $mitra->no_izin;?></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Atas Nama</label>
                                                <div class="form-info"><?php echo $mitra->nama_izin; ?></div>
                                            </div>
                                        </div>
                                        <div class="mitra-description">
                                            <div class="inner"><?php echo $mitra->deskripsi;?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } 
                ?>
            </div>
            <div class="col-xs-12 col-md-12">
                <p class="text-center mt30">
                    <a href="/mitra-bisnis" class="btn btn-hijau btn-bordered">Mitra Selengkapnya <i class="lnr lnr-chevron-right"></i></a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Pop Up Modal Informastion -->

<?php 
if (isset($iklan))
{
?>    
    <div id="invoiceModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalGallery" style="width: initial;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <i class="fa fa-times" data-dismiss="modal" style="float: right; cursor: pointer; font-size: 2em;margin-top: -18px;"></i>
                    <a href="<?php echo $iklan->url;?>" target="_blank">
                        <div class="popup_ads">
                            <img src="/images/ads/<?php echo $iklan->image;?>" class="lazy" align="center" style="margin-top: 13px; width: 100%; padding-bottom: 25px;">
                            <input type="hidden" name="pupop_ads_id" id="pupop_ads_id" value="1">
                        </div>
                    </a>
                </div>
                <!-- <div class="modal-footer">
                </div> -->
            </div>
        </div>
    </div>
<?php
}
?>


<!-- ======================== -->

<script>
    $(document).ready(function()
    {
        //START : Setup Popup Ads Modal
        $('#invoiceModal').modal('show').attr('style','display: block;').addClass('in');


        // setInterval(function()
        // {
            // if($('#pupop_ads_id').val() == 1)
            // {
            //     $('.popup_ads > img').attr('src','/images/travel/Russia.jpg').fadeIn('slow');
            //     $('#pupop_ads_id').val(2);
            // }
            // else
            // {
            //     $('.popup_ads > img').attr('src','/images/popup/jasmine1.jpg').fadeIn('slow');
            //     $('#pupop_ads_id').val(1);
            // }
            
        // }, 3000);
        //END : Setup Popup Ads Modal

        $('#coba2').click(function(e) {
            e.preventDefault();  //stop the browser from following
            window.location.href = '/images/boy.png';
        });

        var pickerTheme = new Pikaday(
        {
            field: document.getElementById('datepicker'),
            // theme: 'dark-theme',
            i18n: {
              previousMonth : 'Bulan Sebelumnya',
              nextMonth     : 'Bulan Berikutnya',
              months        : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
              weekdays      : ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'],
              weekdaysShort : ['Min','Sen','Sel','Rab','Kam','Jum','Sab']
            }
        });

        $('#travel-id_negara').change(function(){
            var id_negara = $(this).val();

            $.ajax({
                method:"POST",
                url:"<?php echo Yii::app()->request->baseUrl;?>/product/getCity",
                data:{negara:id_negara,type:'travel'},
                success:function(data){
                    $("#travel-select-region").html(data);
                }
            });
        });

        $('#business-id_negara').change(function(){
            var id_negara = $(this).val();

            $.ajax({
                method:"POST",
                url:"<?php echo Yii::app()->request->baseUrl;?>/product/getCity",
                data:{negara:id_negara,type:'business'},
                success:function(data){
                    $("#business-select-region").html(data);
                }
            });
        });

        $('#umroh-kategori').change(function(){
            var value   = $(this).val();
            var tipe    = '';

            if(value == 'travel')
            {
                tipe    = 0;
                value   = 'travel';
            }
            else if(value == 'travel1')
            {
                tipe    = 1;
                value   = 'travel';
            }

            $('input[name="submit"]').val(value);
            $('input[name="tipe"]').val(tipe);
        });

        var tour = new Tour({
            storage : false,
            onEnd: function (tour) {
                $("html, body").animate({ scrollTop: 0 }, 1000);
            },
            template: '<div class="popover tour" style="width: 355px;max-width: 476px;">'+
                        '<div class="arrow"></div>'+
                        '<h3 class="popover-title"></h3>'+
                        '<div class="popover-content"></div>'+
                        '<div class="popover-navigation">'+
                           ' <button class="btn btn-default" data-role="prev">« Sebelumnya</button>'+
                           ' <span data-role="separator"></span>'+
                           ' <button class="btn btn-default"data-role="next">Berikutnya »</button>'+
                            '<button class="btn btn-default" data-role="end">Selesai</button>'+
                        '</div>'+
                      '</div>',
        });
     
        tour.addSteps([
          {
            element: ".carousel-indicators",
            placement: "top",
            title: "Assalamu'alaikum Warohmatullohi Wabarokatuh",
            content: "Selamat datang di website JalanHalal.com<br/>Butuh bantuan kami?"
          },
          {
            element: ".tour1",
            placement: "top",
            title: "JalanHalal.com",
            content: "Temukan paket yang anda butuhkan.",
            backdrop: true
          },
          {
            element: ".populer.pas_gede",
            placement: "top",
            backdrop: true,
            title: "JalanHalal.com - Paket Populer",
            content: "Berikut beberapa paket yang populer."
          },
          {
            element: ".promo",
            placement: "top",
            backdrop: true,
            title: "JalanHalal.com - Paket Promo",
            content: "Berikut beberapa paket promo dari kami."
          },
     
        ]);
     
        // Initialize the tour
        tour.init();
     
        // Start the tour
        tour.start();
    });
</script>

