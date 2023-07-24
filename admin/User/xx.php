<div class="content-wrapper">
    
<head>
        <!-- datatable style -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
        <!-- bootstrap 4 css  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- css tambahan  -->
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    </head>
  <?php
    include "../../config/koneksi.php";

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
    <?php
        break;
    }
  } else {
    ?>

    <section class="content-header">
      <h1>
        Siswa yang Lulus
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Siswa yang Lulus</li>
      </ol>
    </section>

    <section class="content">
   <div style="padding-bottom: 6px;">
         
   <button onclick="window.print()"  class="btn btn-info btn-flat">Cetak</button>
    
   </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped" id="table_id">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Siswa</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>No Handphone</th>
                      <th>Status Kelulusan</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $be = mysqli_query($con, "SELECT * FROM psb where kelulusan='1' ORDER BY id_psb DESC");
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
                       
                        
                                           <!-- ---------------------------- -->
                                        <?php if ( $r["kelulusan"]== 0){?>
                                        <td>Menunggu Pengumuman Kelulusan</td>
                                        <?php }elseif( $r["kelulusan"]== 1){ ?>
                                        <td>Selamat Ananda <?= $r["nama_siswa"]; ?> Dinyatakan Lulus di SMA Negeri 9 Merangin</td>
                                        <?php }else {?>
                                        <td>Maaf Ananda <?= $r["nama_siswa"]; ?> Dinyatakan Tidak Lulus</td>
                                        <?php } ?>
                                      
                     
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

          // if (isset($_POST['id'])) {
          //   $sql = mysqli_query($con, "SELECT * FROM psb where id_psb'$_POST[id]'");
          //   $data = mysqli_fetch_assoc($sql);
          // }
          
          $kelulusan = $_POST['kelulusan'];
      // echo"UPDATE psb set kelulusan='$_POST[kelulusan]'where id_psb='$_POST[id]'";exit;
          $save = mysqli_query($con, "UPDATE psb set kelulusan='$_POST[kelulusan]'where id_psb='$_POST[id]'");
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

        ?>
        
        <!-- jquery -->
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <!-- jquery datatable -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    
        <!-- script tambahan  -->
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js">
        </script>
    
        <!-- fungsi datatable -->
        <script>
            $(document).ready(function () {
                $('#table_id').DataTable({
                    // script untuk membuat export data 
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                })
            });
    
        </script>