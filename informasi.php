<section class="parallax parallax1" style="background:#000 url('img/backgrounds/bg-dark3.jpg') 50% 0 no-repeat fixed;">
    <div class="dark-overlay p-t-b-80" data-overlay-opacity="0">
        <div class="container">
            <div class="row">
                <h2 class="text-light text-center emphasis" data-in-effect="fadeInUp">INFORMASI</h2>
            </div>
        </div>
    </div>
</section>

<section id="patch-pricing" class="bg-light-gray p-t-b-80">
    <div class="container">
        <div class="p-b-80">
            <h1 class="text-colored text-center emphasis" data-aos="fade" data-aos-delay="0">INFORMASI</h1>
            <p class="col-sm-12 sub-header text-center" data-aos="fade" data-aos-delay="150">

                </p>
        </div>



    <div class="blogging blog p-t-b-80" id="">
            <div class="container">
                <div class="row">
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM  informasi a join kategori b ON a.id_kategori=b.id_kategori ORDER BY id_informasi DESC ");
                    while ($data = mysqli_fetch_assoc($sql)) {
                        $isi = substr($data['isi_informasi'], 0, 35);
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
                                        <p><?= $isi?>...</p>
                                    </div>
                                    <center><a class="btn btn-lg btn-ghost m-t-20 m-b-40 " href="?module=informasi_detail&id=<?= $data['id_informasi'] ?>"><span>Read More</span></a></center>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
           
        </div>
</section>