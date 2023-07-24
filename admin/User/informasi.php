<div class="content-wrapper">
<script src="../assets/js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="../assets/js/datatables.min.js"></script>
  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahinformasi":

        if (isset($_POST['save'])) {
          $tglskrg = date('Y-m-d');
          $judulseo = seo_title($_POST['judul']);
          $nmberkas  = $_FILES["gambar"]["name"];
          $lokberkas = $_FILES["gambar"]["tmp_name"];
          $nmfoto = date("YmdHis") . $nmberkas;

          $valid    = array('jpg', 'png', 'gif', 'jpeg','JPG','PNG','GIF','JPEG');
          
          list($txt, $ext) = explode(".", $nmfoto);
     
          if (in_array($ext, $valid)) {

            if (!empty($lokberkas)) {
              move_uploaded_file($lokberkas, "../../img/informasi/$nmfoto");
            }

            $save = mysqli_query($con, "INSERT INTO informasi (id_kategori,judul_informasi, tgl_post, isi_informasi, gambar) VALUE ('$_POST[id_kategori]','$_POST[judul]','$tglskrg', '$_POST[deskripsi]' , '$nmfoto')");

            if ($save) {
              echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=informasi';
            </script>";
              exit;
            } else {
              echo "<script>alert('Gagal');
            </script>";
            }
          } else {
            echo "<script>
              alert('Format Foto Tidak Mendukung, Upload Foto Dengan Format png/jpg/gif/jpeg');
            </script>";
          }
        }
  ?>
        <section class="content-header">
          <h1>
            Informasi
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah </li>
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
                        <label for="kdp" class="col-sm-2 control-label">Nama Kategori</label>
                        <div class="col-sm-8">
                          <select class="form-control" name="id_kategori" id="">
                            <option value="">--Silahkan Pilih--</option>
                            <?php
                            $xx = mysqli_query($con, "SELECT * FROM kategori ");
                            $no = 1;
                            while ($data = mysqli_fetch_assoc($xx)) { ?>
                              <option value="<?= $data['id_kategori'] ?>"><?= $data['nama_kategori'] ?></option>
                            <?php } ?>

                          </select>
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
      case "editinformasi":
        if (isset($_GET['id'])) {
          $sql = mysqli_query($con, "SELECT * FROM informasi a join kategori b ON a.id_kategori=b.id_kategori where id_informasi='$_GET[id]'");
          $data = mysqli_fetch_assoc($sql);
        }
        if (isset($_POST['save'])) {

          $nmberkas  = $_FILES['foto']["name"];
          $lokberkas = $_FILES["foto"]["tmp_name"];
          $nmfoto = date("YmdHis") . $nmberkas;
          $valid    = array('jpg', 'png', 'gif', 'jpeg','JPG','PNG','GIF','JPEG');

          if (empty($lokberkas)) {

            $save = mysqli_query($con, "UPDATE informasi set  id_kategori='$_POST[id_kategori]',judul_informasi='$_POST[judul]', isi_informasi='$_POST[deskripsi]' where id_informasi='$_GET[id]'");
            if ($save) {
              echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=informasi';
              </script>";
            } else {
              echo "<script>alert('Gagal');
              </script>";
            }
          } elseif (!empty($lokberkas)) {
            list($txt, $ext) = explode(".", $nmfoto);

            if (in_array($ext, $valid)) {

              move_uploaded_file($lokberkas, "../../img/informasi/$nmfoto");
              $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM informasi where id_informasi='$_GET[id]'"));

              unlink("../../img/informasi/" . $lihat['gambar']);

              $save = mysqli_query($con, "UPDATE informasi set judul_informasi='$_POST[judul]', isi_informasi='$_POST[deskripsi]', gambar='$nmfoto' where id_informasi='$_GET[id]'");
              if ($save) {
                echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=informasi';
              </script>";
              } else {
                echo "<script>alert('Gagal');
              </script>";
              }
            } else {
              echo "<script>
               alert('Format Foto Tidak Mendukung, Upload Foto Dengan Format png/jpg/gif/jpeg');
               </script>";
            }
          }
        }
      ?>
        <section class="content-header">
          <h1>
            Informasi
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Informasi</li>
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
                        <input type="text" name="judul" id="jdl" class="form-control" value="<?= $data['judul_informasi']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="kdp" class="col-sm-2 control-label">Nama Kategori</label>
                      <div class="col-sm-8">
                        <select class="form-control" id="id_kategori" name="id_kategori" id="">
                          <option value="">--Silahkan Pilih--</option>
                          <?php
                          $xx = mysqli_query($con, "SELECT * FROM kategori ");
                          $no = 1;
                          while ($xr = mysqli_fetch_assoc($xx)) { ?>
                            <option value="<?= $xr['id_kategori'] ?>"><?= $xr['nama_kategori'] ?></option>
                          <?php } ?>

                        </select>
                      </div>
                    </div>
                    <script>
                      document.getElementById('id_kategori').value = <?= $data['id_kategori']; ?>
                    </script>
                    <div class="form-group">
                      <label for="des" class="col-sm-2 control-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <textarea type="text" name="deskripsi" id="editor" class="form-control" rows="15" cols="80"><?= $data['isi_informasi']; ?></textarea>
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
                        <img src="../../img/informasi/<?= $data['gambar']; ?>" style="width:250px;">
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
      case "hapusinformasi":

        if (isset($_GET['id'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM informasi where id_informasi='$_GET[id]'"));

          unlink("../../img/informasi/" . $lihat['gambar']);
          $del = mysqli_query($con, "DELETE FROM informasi where id_informasi='$_GET[id]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=informasi';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=informasi';
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
        Data Informasi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Informasi</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=informasi&aksi=tambahinformasi" class="btn btn-flat btn-primary">Tambah </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Gambar</th>
                      <th>Nama Kategori</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $be = mysqli_query($con, "SELECT * FROM informasi a join kategori b ON a.id_kategori=b.id_kategori ORDER BY tgl_post DESC");
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($be)) {
                      $des = substr($r['isi_informasi'], 0, 50) . "...";
                    ?>

                      <tr>
                        <td><?= $no; ?></td>
                        <td><img src="../../img/informasi/<?= $r["gambar"]; ?>" style=" height:120px; width:100px"></td>
                        <td><?= $r["nama_kategori"]; ?></td>
                        <td><?= $r["judul_informasi"]; ?></td>
                        <td><?= $des; ?></td>
                        <td><a href="?module=informasi&aksi=editinformasi&id=<?= $r['id_informasi']; ?>" class="btn btn-success btn-flat">Edit</a>
                          <a href="?module=informasi&aksi=hapusinformasi&id=<?= $r['id_informasi']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
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