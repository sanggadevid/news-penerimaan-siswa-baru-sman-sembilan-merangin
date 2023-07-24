<section class="single-post">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">


            <div class="item active">
                <img src="img/homeslider/BG-01.jpeg" style=" height:500px; width:1500px" alt="NO IMAGE" class="image-responsive">
            </div>

            <div class="item">
                <img src="img/homeslider/BG-02.jpg" style=" height:500px; width:1500px" alt="NO IMAGE" class="image-responsive">
            </div>

            <div class="item">
                <img src="img/homeslider/BG-01.jpeg" style=" height:500px; width:1500px" alt="NO IMAGE" class="image-responsive">
            </div>

            <div class="item">
                <img src="img/homeslider/BG-02.jpg" style=" height:500px; width:1500px" alt="NO IMAGE" class="image-responsive">
            </div>


        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <CENTER>
        <b><i>
                <h3>SELAMAT DATANG DI WEBSITE SMAN 9 Merangin </h3>
            </i></b>
    </CENTER>

    <h5 style="background-color:gray; border-top: 5px solid lightskyblue;"></h5>
    </section">




    <section id="patch-pricing" class="bg-light-gray p-t-b-80">
        <div class="container p-b-40">
            <div>
                <h1 class="text-colored text-center ">INFORMASI TERBARU</h1>
                <p class="col-sm-12 sub-header text-center"> SMAN 9 MERANGIN </p>
            </div>
        </div>

        <div class="blogging blog p-t-b-80" id="">
            <div class="container">
                <div class="row">
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM  informasi a join kategori b ON a.id_kategori=b.id_kategori ORDER BY id_informasi DESC LIMIT 4");
                    while ($data = mysqli_fetch_assoc($sql)) {
                        $isi = substr($data['isi_informasi'], 0, 230);
                        $judulinformasi = substr($data['judul_informasi'], 0, 16) . "...";
                    ?>

                        <div class=" col-sm-3 p-b-40">
                            <div class="post row">
                                <div class="col-xs-12">
                                    <a href="?module=informasi_detail&id=<?= $data['id_informasi'] ?>"><img src="img/informasi/<?= $data['gambar'] ?>" alt="<?= $data['judul_informasi'] ?>" class="img-responsive" style="width: 100%; height: 250px;"></a>
                                    <br>
                                    <div class="blog-info">
                                        <span class="meta">
                                            <span class="date-month"><?= tgl_indo($data['tgl_post']) ?></span>
                                        </span>
                                        <span class="date-month"><?= $data['nama_kategori'] ?></span>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-12">
                                        <h3 style="font-size: 14px;"><a href="?module=informasi_detail&id=<?= $data['id_informasi'] ?>"><?= $data['judul_informasi'] ?></a></h3>
                                        <br>
                                    </div>
                                    <a class="read-more" href="?module=informasi_detail&id=<?= $data['id_informasi'] ?>">Read More...</a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
            <div align="center">
                <a class="btn btn-primary" href="?module=informasi">LIHAT SEMUA</a>
            </div>
        </div>
    </section>

    <section class="p-t-b-80 lets-social">
        <div class="container">
            <div class="row p-b-80" data-aos="fade" data-aos-delay="0">
                <h1 class="text-dark text-center">Media <span class="text-colored emphasis">Sosial</span></h1>
                <p class="col-sm-12 sub-header text-center"></p>
            </div>



            <div class="row">
                <div class="col-sm-3 text-center">
                    <a href="#">
                        <div class="social-frame">
                            <span class="text-colored ion-social-facebook icon-3x"></span>
                        </div>
                        <h4><a href="#">Facebook</a></h4>
                    </a>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="#">
                        <div class="social-frame">
                            <span class="text-colored ion-social-twitter icon-3x"></span>
                        </div>
                        <h4><a href="#">Twitter</a></h4>
                    </a>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="#">
                        <div class="social-frame">
                            <span class="text-colored ion-social-instagram icon-3x"></span>
                        </div>
                        <h4><a href="#">Instagram</a></h4>
                    </a>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="https://api.whatsapp.com/send?phone=<?php echo $cek['wa'] ?>&text=Halo Admin. Saya ingin bertanya." target="_blank">
                        <div class="social-frame">
                            <span class="text-colored fa fa-whatsapp icon-3x"></span>
                        </div>
                        <h4><a href="https://api.whatsapp.com/send?phone=<?php echo $cek['wa'] ?>&text=Halo Admin. Saya ingin bertanya." target="_blank">WA</a></h4>
                    </a>
                </div>

            </div>
        </div>
    </section>