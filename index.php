<?php
include "config/koneksi.php";
include "config/fungsi_indotgl.php";
session_start();
// error_reporting(0);

if (@$_SESSION['id_psb'] > 0) {
    header('index.php');
} else {
    header('index.php?module=./');
}
?>
<?php
$ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
$tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
$waktu   = time(); //

// Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini


?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from patchwork.theme-summit.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Apr 2018 01:40:28 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Open Graph Information -->
    <meta property="og:title" content="PatchWork Template - at Themeforest">
    <meta property="og:description" content="PatchWork is a creative one page HTML template with a clear and easy to navigate design which you can use for any kind of business. Apart from its sleek design, you will also enjoy a variety of features created on the principle of providing you with an elegant eye-catching design. Its cutting-edge design will fascinate visitors at first sight. It is compatible with all major browsers and it is well documented.">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="theme-summit.com/">
    <meta property="og:image" content="demo/patchfacebook.jpg" />
    <!-- CSS links -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors/blue.css">
    <!-- Font Family and Favicon-->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,700,800%7CPoppins:300,400,700" rel="stylesheet">
    <link rel="shortcut icon" href="img/assets/logo.png">
    <script src="js/jquery.min.js"></script>
    <!-- Title -->
    <title>SMAN 9 MERANGIN</title>
</head>

<body>
    <!-- Preloader -->
    <!-- <div id="loader">
        <div class="laoder-frame">
            <img class="svg-loader" src="img/assets/loader.svg" alt="circle-loader">
        </div>
    </div> -->
    <div class="homepage">
        <nav class="navbar navbar-head navbar-fixed-top" style="background-color: #B01313;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <a class="navbar-brand logo-white" href="index.html"><img src="img/assets/logo.png" style="height:40px; width: 50;" alt="logo-white"></a>
                    <a class="navbar-brand logo-dark" href=" index.html"><img src="img/assets/logo.png" style="height:40px; width: 50;" alt=" logo-dark"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <?php if (@$_SESSION['id'] >= 1) { ?>
                            <li><a class="local-scroll" href="#"> <?php echo @$_SESSION['nama_sekolah']; ?></a></li>
                        <?php  } ?>
                        <li><a class="" style="color:white;font-size: 20px; font-style: oblique;" href="#">SMAN 9 Merangin</a></li>
                        <li><a class="local-scroll" href="?module=home">HOME</a></li>
                        <li><a href="?module=profil">PROFIL</a></li>
                        <li><a href="?module=dataguru"> DATA GURU</a></li>
                        <li><a href="?module=struktur">STRUKTUR ORGANISASI</a></li>
                        <li><a href="?module=informasi"> INFORMASI</a></li>
                        <li><a href="?module=visimisi">VISI & MISI</a></li>
                     
                        <?php
                        @$id_psb = $_SESSION['id_psb'];
                        if (isset($id_psb)){
                        ?>
                        <li><a href="?module=siswa">PENGUMUMAN</a></li>
                        <?php
                        }else{
                                                ?>
                        <li><a href="?module=psb">PENDAFTARAN</a></li>
                        <?php
                        }?>

                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>

                        <?php
                        @$id_psb = $_SESSION['id_psb'];
                        if (isset($id_psb)){
                        ?>
                        <li><a  href="?module=logout"> LOGOUT</a></li>
                        <?php
                        }else{
                                                ?>
                        <li><a href="?module=login_p">LOGIN</a></li>
                        <?php
                        }?>
                    

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>


        <?php
        include "content.php";
        ?>

        <!-- Footer -->
        <footer>
            <div class="container ">
                <div class="row">
                    <aside class="col-md-12 text-center" data-aos="fade-up" data-aos-delay="0">
                        <div class="row">

                            <div class="col-md-12">
                                <h5 class="text-light ">Selamat Datang di SMA Negeri 9 Merangin. SMA Negeri 9 Merangin adalah SMA yang terletak di Muara Manderas, Kec. Jangkat, Kabupaten Merangin, Jambi 37372 </h5>

                            </div>
                        </div>
                        <hr>
                        <ul class="list-inline footer-social">
                            <li><a href="#"><span class="ion-social-twitter"></span></a></li>
                            <li><a href="#"><span class="ion-social-facebook"></span></a></li>
                            <li><a href="#"><span class="ion-social-googleplus"></span></a></li>
                            <li><a href="#"><span class="ion-social-linkedin"></span></a></li>
                            <li><a href="#"><span class="ion-social-youtube"></span></a></li>
                            <li><a href="#"><span class="ion-social-pinterest"></span></a></li>
                            <li><a href="#"><span class="ion-social-instagram"></span></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
            <div id="copyright" data-aos="fade" data-aos-delay="0">
                <div class="container">
                    <div class="row text-center">
                        <a href="#" target="_blank">&copy; SMAN 9 MERANGIN- <?= date('Y') ?></a>

                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/plugins.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyAC0h0f0HXUzD3JGdO0SOEyJl22aNxAm1g"></script>
    <script src="js/main1f63.js?_=jdu878d7"></script>
</body>


<!-- Mirrored from patchwork.theme-summit.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Apr 2018 01:40:39 GMT -->

</html>