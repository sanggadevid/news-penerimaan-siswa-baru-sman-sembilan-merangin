<div class="content-wrapper">
<script src="../assets/js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="../assets/js/datatables.min.js"></script>
    <?php
    if (isset($_GET['aksi'])) {
        $aksi = $_GET['aksi'];

        switch ($aksi) {
            case "tambahkategori":

                if (isset($_POST['save'])) {

                    $nama_kategori = $_POST['nama_kategori'];

                    $save = mysqli_query($con, "INSERT INTO kategori (nama_kategori) VALUE ('$_POST[nama_kategori]')");

                    if ($save) {
                        echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=kategori';
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
                        Kategori
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
                                                <label for="kdp" class="col-sm-2 control-label">Nama Kategori</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nama_kategori" id="kdp" class="form-control">
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
            case "editkategori":
                if (isset($_GET['id'])) {
                    $sql = mysqli_query($con, "SELECT * FROM kategori where id_kategori='$_GET[id]'");
                    $data = mysqli_fetch_assoc($sql);
                }
                if (isset($_POST['save'])) {
                    $save = mysqli_query($con, "UPDATE kategori set nama_kategori='$_POST[nama_kategori]' where id_kategori='$_GET[id]'");

                    if ($save) {
                        echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=kategori';
              </script>";
                    } else {
                        echo "<script>alert('Gagal');
              </script>";
                    }
                }
            ?>
                <section class="content-header">
                    <h1>
                        kategori
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Edit </li>
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
                                            <label for="jdl" class="col-sm-2 control-label">Nama Kategori</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nama_kategori" id="jdl" class="form-control" value="<?= $data['nama_kategori']; ?>">
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
            case "hapuskategori":

                if (isset($_GET['id'])) {
                    $del = mysqli_query($con, "DELETE FROM kategori where id_kategori='$_GET[id]'");
                    if ($del) {
                        echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=kategori';
    				  </script>";
                    } else {
                        echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=kategori';
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
                kategori
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">kategori </li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <a href="?module=kategori&aksi=tambahkategori" class="btn btn-flat btn-primary">Tambah </a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table table-responsive">
                                <table class="table table-bordered table-striped" id="example1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $be = mysqli_query($con, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                                        $no = 1;
                                        while ($r = mysqli_fetch_assoc($be)) {
                                        ?>

                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?= $r["nama_kategori"]; ?></td>
                                                <td><a href="?module=kategori&aksi=editkategori&id=<?= $r['id_kategori']; ?>" class="btn btn-success btn-flat">Edit</a>
                                                    <a href="?module=kategori&aksi=hapuskategori&id=<?= $r['id_kategori']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
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