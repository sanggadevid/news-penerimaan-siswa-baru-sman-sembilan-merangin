<?php
$informasi = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS informasi FROM informasi"));
$tenaga_kp = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS tenaga_kp FROM tenaga_kp"));



?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <?php
      if ($_SESSION['level'] == 'superadmin') {
      ?>


        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $tenaga_kp['tenaga_kp'] ?></h3>
              <p>Guru</p>
            </div>
            <div class="icon">
              <i class="fa fa-list"></i>
            </div>
            <a href="?module=guru_tkp" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->

        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $informasi['informasi'] ?></h3>
              <p>Informasi</p>
            </div>
            <div class="icon">
              <i class="fa fa-list"></i>
            </div>
            <a href="?module=informasi" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->



        <div  class="col-lg-12 col-xs-12">
          <!-- small box -->
       <center>   <h3>Grafik Kelulusan Siswa SMA N 9 Merangin</h3></center>
          <div style="padding:70px" class="small-box ">
          
            <div class="inner">
         
            <?php

              include "grafik.php";
              ?>
            </div>
            <div class="icon">
              <i class="fa fa-"></i>
            </div>
          </div>
        </div><!-- ./col -->

        <div class="box-footer">
          <div class="form-group">

            <script src="../assets/a/jquery.min.js" type="text/javascript"></script>
            <script src="../assets/a/highcharts.js" type="text/javascript"></script>

            <body>
              <div id='container'> </div>
            </body>
          </div>
        </div>











      <?php }
      if ($_SESSION['level'] == 'pengacara') {
        $data = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tbl_pengacara WHERE id_pengacara='$_SESSION[id_client]'"));
      ?>

        <div class="col-md-12">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../assets/images/user.png" alt="User profile picture">

              <h3 class="profile-username text-center"><?= $data['nama_pengacara'] ?></h3>

              <p class="text-muted text-center"><?= $_SESSION['level'] ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>No Hp </b> <a class="pull-right"><?= $data['nohp_pengacara'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Alamat</b> <a class="pull-right"><?= $data['alamat_pengacara'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?= $data['email_pengacara'] ?></a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>

        </div><!-- /.row -->
      <?php } ?>
    </div>
  </section><!-- /.content -->
</div>