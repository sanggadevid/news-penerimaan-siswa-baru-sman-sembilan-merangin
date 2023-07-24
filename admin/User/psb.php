<div class="content-wrapper">
<script src="../assets/js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="../assets/js/datatables.min.js"></script>
  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahberita":

        if (isset($_POST['save'])) {
          $tglskrg = date('Y-m-d');
          $judulseo = seo_title($_POST['judul']);
          $nmberkas  = $_FILES["gambar"]["name"];
          $lokberkas = $_FILES["gambar"]["tmp_name"];
          $nmfoto = date("YmdHis") . $nmberkas;
          if (!empty($lokberkas)) {
            move_uploaded_file($lokberkas, "../../img/agenda sekolah/$nmfoto");
          }

          $save = mysqli_query($con, "INSERT INTO agenda VALUES ('','$_POST[judul]','$tglskrg', '$_POST[deskripsi]' , '$nmfoto')");

          if ($save) {
            echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=agenda';
            </script>";
            exit;
          } else {
            echo "<script>alert('Gagal');
            </script>";
          }
        }
  ?>
        <section class="content-header">
          <h1>
            Agenda Sekolah
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Agenda</li>
          </ol>
        </section>
        <!-- Content Header (Page header) -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border">

                </div>
                <!-- form start -->
                <form method="POST" class="form-horizontal" action="" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="kdp" class="col-sm-2 control-label">Judul</label>
                        <div class="col-sm-8">
                          <input type="text" name="judul" id="kdp" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="des" class="col-sm-2 control-label">Deskripsi</label>
                        <div class="col-sm-8">
                          <textarea type="text" name="deskripsi" id="editor" class="form-control" rows="15" cols="80"></textarea>

                        </div>
                      </div>



                      <div class="form-group">
                        <label for="gam" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-4">
                          <input type="file" name="gambar" id="gam" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                        </div>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      <?php
        break;
      case "svkelulusan":
       

      ?>
        <section class="content-header">
          <h1>
            Agenda Sekolah
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Agenda</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border">

                </div>

                <!-- form start -->
                <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
                  <div class="box-body ">
                    <div class="form-group">
                      <label for="jdl" class="col-sm-2 control-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text" name="judul" id="jdl" class="form-control" value="<?= $data['judul_agenda']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="des" class="col-sm-2 control-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <textarea type="text" name="deskripsi" id="editor" class="form-control" rows="15" cols="80"><?= $data['isi_agenda']; ?></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="gam" class="col-sm-2 control-label">Gambar</label>
                      <div class="col-sm-4">
                        <input type="file" name="foto" id="gam" class="form-control">
                        <input type="hidden" name="gambarlama" id="jdl" class="form-control" value="<?= $data['gambar']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="gam" class="col-sm-2 control-label">&nbsp;</label>
                      <div class="col-sm-4">
                        <img src="../../img/agenda sekolah/<?= $data['gambar']; ?>" style="width:250px;">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-4 col-md-offset-2">
                        <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      <?php
        break;
      case "hapusberita":

        if (isset($_GET['id'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM psb where id_psb='$_GET[id]'"));

          $del = mysqli_query($con, "DELETE FROM psb where id_psb='$_GET[id]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=psb';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=psb';
              </script>";
          }
        }
      ?>
    <?php break;
      case "hapusp":

        
          $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM psb "));

          $del = mysqli_query($con, "UPDATE  psb Set tgl_kelulusan=''");
          if ($del) {
            echo "<script>
              
    					   window.location='index.php?module=psb';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=psb';
              </script>";
          }
        
      ?>
    <?php
        break;
    }
  } else {
    ?>

    <section class="content-header">
      <h1>
        Penerimaan Siswa Baru
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Penerimaan Siswa Baru</li>
      </ol>
    </section>

    <section class="content">
   <div style="padding-bottom: 6px;">
   <button type="button" class="btn btn-warning btn-flat" data-toggle="modal" data-target="#myModalxx">Aprove Tanggal Pengumuman Lulus</button>
   <a href="?module=psb&aksi=hapusp" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Mereset Tanggal ... ?')">Reset Tanggal</a>
   </div>

   <div id="myModalxx" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Aproved</h4>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" class="form-horizontal" action="" enctype="multipart/form-data">
                                        <div class="row">
                                          <div class="col-md-4">
                                            <label for="">Tanggal</label>
                                          <input type="date" name="tgl" class="form-control">
                                          </div>
                                          <div class="col-md-3">
                                         <label for="">Jam</label>
                                         <input type="text" name="jam" placeholder="Ex = 07:00" class="form-control">
                                         </div>
                                        </div>
                                         <br>
                                           <button type="submit"  class="btn btn-info btn-flat" name="svtanggal">Simpan</button>
                                      </form>

                                    </div>
                                    <div  style="padding-top: 6px;" class="modal-footer">
                                      <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>

                                </div>
                              </div>

      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Siswa</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>No Handphone</th>
                      <th>Status Kelulusan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $be = mysqli_query($con, "SELECT * FROM psb ORDER BY id_psb DESC");
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($be)) {
                    ?>

                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $r["nama_siswa"]; ?></td>
                        <td><?= $r["jk_siswa"]; ?></td>
                        <td><?= $r["alamat_ortu"]; ?></td>
                        <td><?= $r["nohp"]; ?></td>
                        <?php if ( $r["kelulusan"]== 0){?>
                                        <td>Pending</td>
                                        <?php }elseif( $r["kelulusan"]== 1){ ?>
                                        <td>LULUS</td>
                                        <?php }elseif( $r["kelulusan"]== 2){ ?>
                                        <td>TIDAK LULUS</td>
                                        <?php } ?>
                        <td>
                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                                  <!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#myModal<?= $r["id_psb"]; ?>">Aprove kelulusan</button>

                              <!-- Modal -->
                              <div id="myModal<?= $r["id_psb"]; ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Aproved</h4>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" class="form-horizontal" action="" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?= $r["id_psb"]; ?>">
                                           <select name="kelulusan" id="" class="form-control">
                                           <option value="">--Silahkan Pilih--</option>
                                           <option value="1">LULUS</option>
                                           <option value="2">TIDAK LUUS</option>
                                           </select>

                                           <button type="submit"  class="btn btn-info btn-flat" name="svkelulusan">Simpan</button>
                                      </form>
                                   
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>

                                </div>
                              </div>
                              <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                          <a href="?module=psb&aksi=hapusberita&id=<?= $r['id_psb']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
                        </td>
                      </tr>
                    <?php $no++;
                    } ?> 
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
      <!-- /.box -->
    </section>
  <?php } ?>

</div>


<?php
        if (isset($_POST['svkelulusan'])) {

       $th = date('Y');
          $kelulusan = $_POST['kelulusan'];
      // echo"UPDATE psb set kelulusan='$_POST[kelulusan]'where id_psb='$_POST[id]'";exit;
          $save = mysqli_query($con, "UPDATE psb set kelulusan='$_POST[kelulusan]',  thn_aprove='$th'where id_psb='$_POST[id]'");
          if ($save) {
            echo "<script>
            alert('Approved Succes');
            window.location='?module=psb';
              </script>";
          } else {
            echo "<script>alert('Gagal');
              </script>";
          }
        }


        if (isset($_POST['svtanggal'])) {

    
          $tgl = $_POST['tgl'];
          $jam = $_POST['jam'];
          $kelulusan =$tgl.' '.$jam.':00';
         
      // echo"UPDATE psb set kelulusan='$_POST[kelulusan]'where id_psb='$_POST[id]'";exit;
          $save = mysqli_query($con, "UPDATE psb set tgl_kelulusan='$kelulusan'");
          if ($save) {
            echo "<script>
            alert('Approved Succes');
            window.location='?module=psb';
              </script>";
          } else {
            echo "<script>alert('Gagal   $kelulusan');
              </script>";
          }
        }


