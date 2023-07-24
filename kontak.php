<section class="parallax parallax1" style="background:#000 url('img/backgrounds/bg-dark3.jpg') 50% 0 no-repeat fixed;">
    <div class="dark-overlay p-t-b-80" data-overlay-opacity="0">
        <div class="container">
            <div class="row">
                <h1 class="col-sm-12 text-light text-center" data-aos="fade-down" data-aos-delay="0">- KONTAK -</h1>
            </div>
        </div>
    </div>
</section>



<section class="p-t-b-80 lets-social">
    <div class="container">
        <div class="row p-b-80" data-aos="fade" data-aos-delay="0">
            <h1 class="text-dark text-center">Media <span class="text-colored emphasis">Sosial</span></h1>
            <p class="col-sm-12 sub-header text-center"></p>
        </div>

        <?php
        $ss = mysqli_query($con, "SELECT * FROM sosmed");
        $cek = mysqli_fetch_array($ss);

        ?>


        <div class="row">
            <div class="col-sm-3 text-center">
                <a href="<?= $cek["fb"]; ?>" target="_blank">
                    <div class="social-frame">
                        <span class="text-colored ion-social-facebook icon-3x"></span>
                    </div>
                    <h4><a href="<?= $cek["fb"]; ?>" target="_blank">Facebook</a></h4>
                </a>
            </div>
            <div class="col-sm-3 text-center">
                <a href="<?= $cek["twitter"]; ?>" target="_blank">
                    <div class="social-frame">
                        <span class="text-colored ion-social-twitter icon-3x"></span>
                    </div>
                    <h4><a href="<?= $cek["twitter"]; ?>" target="_blank">Twitter</a></h4>
                </a>
            </div>
            <div class="col-sm-3 text-center">
                <a href="<?= $cek["ig"]; ?>" target="_blank">
                    <div class="social-frame">
                        <span class="text-colored ion-social-instagram icon-3x"></span>
                    </div>
                    <h4><a href="<?= $cek["ig"]; ?>" target="_blank">Instagram</a></h4>
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

<section class="parallax parallax3" style="background: url('img/backgrounds/bg-white1.jpg') 50% 0 no-repeat fixed; padding-bottom:15px;">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="text-center">
                <div>
                    <h1>Kontak<span class="emphasis text-colored"></span></h1>
                    <p class="sub-header">&nbsp;</p>
                </div>
            </div>
            <form method="POST" action="">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" id="name" name="nama" placeholder="Name*" required data-error="Please fill in your name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="email" class="form-control input-lg" name="email" placeholder="Email*" required data-error="Please enter a valid e-mail address">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" name="telp" placeholder="Tel">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <textarea id="comments" rows="10" class="form-control input-lg" name="isi_pesan" placeholder="Message*" required data-error="Please write your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-submitted">
                        <img class="svg-loader" src="img/assets/loader.svg" alt="loader message">
                    </div>
                </div>
                <input type="submit" name="simpan" class="btn btn-colored btn-lg center-block m-t-20" value="SEND">
            </form>
            <div id="status-notification" class="text-colored"></div>

            <?php
            if (isset($_POST["simpan"])) {
                $save = mysqli_query($con, "INSERT INTO pesan values('','$_POST[nama]','$_POST[email]','$_POST[telp]','$_POST[isi_pesan]')");

                if ($save) {
                    echo "<script>
										window.alert('Sukses mengirim pesan');
										window.location='?module=home';
								</script>";
                }
            }

            ?>
        </div>
    </div>
</section>