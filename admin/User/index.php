<?php
@session_start();
include "../../config/koneksi.php";
include "../../config/fungsi_seo.php";
include "../../config/fungsi_indotgl.php";
// error_reporting(0);
?>
<?php
if ($_SESSION['level'] != 'superadmin') {
  header('Location: ../login.php');
} else {

?>


  <!-- /*Create Nopen rianto - date 2017-06-02 */ -->
  <!DOCTYPE html>

  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../../foto/icon.jpg" />
    <title>Administrator</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/datatables.min.css" />
    <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="../assets/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../assets/select2/dist/css/select2.min.css">
    <script src="../assets/jquery.min.js"></script>
    <script src="chart.js"></script>

  </head>

  <body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">
      <div class="logo">

        <span class="nm-sek"></span>
      </div>
      <header class="main-header">
        <!-- Logo -->
        <div href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Adm</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Administrator</b></span>
        </div>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->


              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../assets/images/user.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['id_client']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../../img/assets/logo.png" style="height:45px; width: 40px;">
                    <p>
                      <?php echo $_SESSION['id_client']; ?>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">

                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">

                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat"><i class="fa fa-sign-out"> Keluar</i></a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar" style="margin-top: 60px;">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../../img/assets/logo.png" class="img-rounded" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Administrator</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li>
              <a href="?module=home">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>

              </a>
            </li>
            <li>
              <a href="?module=psb"><i class="fa fa-list">
                </i> <span>Pendaftaran</span></a>
            </li>
            <li>
              <a href="?module=siswa"><i class="fa fa-list">
                </i> <span>Siswa</span></a>
            </li>
            <li>
              <a href="?module=guru_tkp">
                <i class="fa fa-list"></i> <span> Data Guru</span>
              </a>
            </li>

            <li>
              <a href="?module=visi_misi"><i class="fa fa-list">
                </i> <span>Visi & Misi</span></a>
            </li>
            <li>
              <a href="?module=struktur"><i class="fa fa-list">
                </i> <span>Struktur Organisasi</span></a>
            </li>
          
        

      
            <li>
              <a href="?module=kategori"><i class="fa fa-list">
                </i> <span>Kategori</span></a>
            </li>

            <li>
              <a href="?module=informasi"><i class="fa fa-list">
                </i> <span>Informasi</span></a>
            </li>


            <li>
              <a href="?module=profil"><i class="fa fa-list">
                </i> <span>Profil</span></a>
            </li>

            <!-- --------------------------------------------- -->





            <li>
              <a href="logout.php">
                <i class="fa fa-sign-out"></i> <span>Logout</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <content>
        <?php include "content.php"; ?>
      </content>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b></b>
        </div>
        &copy; Copyright <?php echo date('Y');  ?>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark" style="top:50px;">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
          </div>
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
   
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 3.3.5 -->
    <script src="../assets/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="../assets/js/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/js/backtoTop.js"></script>

    <script src="../assets/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/ckeditor/ckeditor.js"></script>
    <script>
      $(function() {
        $('.textarea').wysihtml5();
        $('.select2').select2();
        $('#datepicker').datepicker({
          autoclose: true
        });

        $("#example1").DataTable({
              // script untuk membuat export data 
        
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });

        CKEDITOR.replace('editor');
      });
    </script>
  </body>

  </html>
<?php
}
?>