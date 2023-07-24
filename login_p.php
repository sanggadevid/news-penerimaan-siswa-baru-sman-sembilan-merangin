<section class="parallax parallax1" style="background:#000 url('img/backgrounds/bg-dark3.jpg') 50% 0 no-repeat fixed;">
    <div class="dark-overlay p-t-b-80" data-overlay-opacity="0">
        <div class="container">
            <div class="row">
                <h2 class="text-light text-center emphasis" data-in-effect="fadeInUp">LOGIN</h2>
            </div>
        </div>
    </div>
</section>

<section id="contact-field" class="p-t-b-80">
    <div class="container">
        <div class="col-md-6 col-md-offset-3" style="border:1px solid grey; padding:10px 0; border-radius:3px; ">
            <div class="text-center">
                <div>
                    <h1>Form <span class="emphasis text-colored">Login</span></h1>
                </div>
            </div>
            <form method="post" action="">
                <div class="row ">

                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" name="username" placeholder="Username*" required data-error="Please enter a valid username">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" name="password" placeholder="password">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-submitted">
                        <img class="svg-loader" src="img/assets/loader.svg" alt="loader message">
                    </div>
                </div>
                <input type="submit" name="login" class="btn btn-success btn-lg center-block m-t-20" value="Login">

            </form>
            <div id="status-notification" class="text-colored"></div>
        </div>
    </div>
</section>


<?php

if (isset($_POST["login"])) {
    $lgn = mysqli_query($con, "SELECT * FROM psb where username='$_POST[username]' and password='$_POST[password]'");
    $r = mysqli_fetch_array($lgn);
    $row = mysqli_num_rows($lgn);

    if ($row > 0) {
        session_start();
        $_SESSION["id_psb"] = $r["id_psb"];
        $_SESSION["username"] = $r["username"];
        $_SESSION["nama_siswa"] = $r["nama_siswa"];

        echo "<script>
					window.alert('Anda Berhasil Login.!');
					window.location='?module=siswa';
				</script>";
    } else {
        echo "<script>
					window.alert('Anda Belum Beruntung untuk Login. Silahkan Anda coba Kembali');
					window.location='?module=login_p';
				</script>";
    }
}
?>