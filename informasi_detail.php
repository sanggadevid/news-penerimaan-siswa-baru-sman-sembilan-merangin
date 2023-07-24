<section class="parallax parallax1" style="background:#000 url('img/backgrounds/bg-dark3.jpg') 50% 0 no-repeat fixed;">
    <div class="dark-overlay p-t-b-80" data-overlay-opacity="0">
        <div class="container">
            <div class="row">
                <h2 class="text-light text-center emphasis" data-in-effect="fadeInUp">informasi</h2>
            </div>
        </div>
    </div>
</section>

<section class="parallax parallax3" style="background: url('img/backgrounds/bg-white1.jpg') 50% 0 no-repeat fixed;">
    <div class="white-overlay p-t-b-80" data-overlay-opacity="0.8">
        <div class="container">

            <div class="row">
                <div class="col-md-9" data-aos="fade">
                    <div class="p-t-20">
                        <?php
                        $ck = mysqli_query($con, "SELECT * FROM  informasi a join kategori b ON a.id_kategori=b.id_kategori where id_informasi='$_GET[id]'");
                        $bkl = mysqli_fetch_array($ck);
                        ?>
                        <p>
                            <center><img src="img/informasi/<?= $bkl['gambar'] ?>" style="width:60%; height:450px;"></center>
                        </p>
                        <h3 class="p-b-20 text-dark"><b><?= $bkl["judul_informasi"]; ?></b></h3>
                        <b><?= $bkl["nama_kategori"]; ?></b>
                        <br>

                        <p class="m-l-r-30" style="size:18px;"><strong><span style="font-family:Comic Sans MS,cursive"><?= $bkl["isi_informasi"]; ?></span></strong></p>

                    </div>
                </div>

                <div class="col-md-3 col-xs-12 widgets" data-aos="fade">
                    <ul class="blog-widget">
                        <li>
                            <h5 class="widget-title">Recent Posts</h5>
                        </li>
                        <li>
                            <?php
                            $sql = mysqli_query($con, "SELECT * FROM informasi ORDER BY RAND() LIMIT 4");
                            while ($data = mysqli_fetch_assoc($sql)) {
                                $isi = substr($data['isi_informasi'], 0, 230);
                                $judulinformasi = substr($data['judul_informasi'], 0, 16) . "...";
                            ?>
                                <div class="row">
                                    <a href="?module=informasi_detail&id=<?= $data['id_informasi'] ?>">
                                        <span class="col-xs-6"><img src="img/informasi/<?= $data['gambar'] ?>" alt="<?= $data['judul_informasi'] ?>"></span>
                                        <div class="col-xs-6">
                                            <h6><?= $judulinformasi ?></h6>
                                            <p class="text-light-gray"><small><?= tgl_indo($data['tgl_post']) ?></small></p>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>