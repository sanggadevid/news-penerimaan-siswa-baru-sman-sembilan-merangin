<div class="content-wrapper">

    <?php
    if (isset($_GET['aksi'])) {
        $aksi = $_GET['aksi'];

        switch ($aksi) {
            case "tambahdata":

                if (isset($_POST['save'])) {

                    $save = mysqli_query($con, "INSERT INTO `sekolah`( `nspn`, `nama_sekolah`, `alamat`, `username`, `password`) VALUES ('$_POST[nspn]','$_POST[nama_sekolah]','$_POST[alamat]', '$_POST[username]', '$_POST[password]' )");

                    if ($save) {
                        echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=sekolah';
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
                        Data Sekolah
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
                                                <label for="" class="col-sm-2 control-label">NSPN</label>
                                                <div class="col-sm-8">
                                                    <input type="number" name="nspn" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Nama Sekolah</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nama_sekolah" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Alamat Sekolah</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="alamat" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Username</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="username" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="password" id="" class="form-control">
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
            case "editdata":
                if (isset($_GET['id'])) {
                    $sql = mysqli_query($con, "SELECT * FROM sekolah where id_sekolah='$_GET[id]'");
                    $data = mysqli_fetch_assoc($sql);
                }

                if (isset($_POST['save'])) {

                    $save = mysqli_query($con, "UPDATE sekolah set nspn='$_POST[nspn]', nama_sekolah='$_POST[nama_sekolah]', alamat='$_POST[alamat]', username='$_POST[username]', password='$_POST[password]' where id_sekolah='$_GET[id]'");

                    if ($save) {
                        echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=sekolah';
              </script>";
                    } else {
                        echo "<script>alert('Gagal');
              </script>";
                    }
                }
            ?>
                <section class="content-header">
                    <h1>
                        Data Sekolah
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
                                            <label for="kdp" class="col-sm-2 control-label">NSPN</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="nspn" class="form-control" value="<?= $data['nspn']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="des" class="col-sm-2 control-label">Nama Sekolah</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nama_sekolah" class="form-control" value="<?= $data['nama_sekolah']; ?>">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="des" class="col-sm-2 control-label">Alamat</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="alamat" class="form-control" value="<?= $data['alamat']; ?>">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="des" class="col-sm-2 control-label">Usernmae</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="username" class="form-control" value="<?= $data['username']; ?>">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="des" class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="password" class="form-control" value="<?= $data['password']; ?>">

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
            case "hapusdata":

                if (isset($_GET['id'])) {

                    $del = mysqli_query($con, "DELETE FROM sekolah where id_sekolah='$_GET[id]'");
                    if ($del) {
                        echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=sekolah';
    				  </script>";
                    } else {
                        echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=sekolah';
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
                Data Sekolah
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Data Sekolah</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <a href="?module=sekolah&aksi=tambahdata" class="btn btn-flat btn-primary">Tambah </a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table table-responsive">
                                <table class="table table-bordered table-striped" id="example1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NSPN</th>
                                            <th>Nama Sekolah</th>
                                            <th>Alamat</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $be = mysqli_query($con, "SELECT * FROM sekolah ORDER BY id_sekolah ASC");
                                        $no = 1;
                                        while ($r = mysqli_fetch_assoc($be)) {
                                        ?>

                                            <tr>
                                                <td><?= $no; ?></td>

                                                <td><?= $r["nspn"]; ?></td>
                                                <td><?= $r["nama_sekolah"]; ?></td>
                                                <td><?= $r["alamat"]; ?></td>
                                                <td><?= $r["username"]; ?></td>
                                                <td><?= $r["password"]; ?></td>
                                                <td>
                                                    <a href="?module=sekolah&aksi=editdata&id=<?= $r['id_sekolah']; ?>" class="btn btn-success btn-flat">Edit</a>
                                                    <a href="?module=sekolah&aksi=hapusdata&id=<?= $r['id_sekolah']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
                                                    <a href="?module=cetak_pass&id=<?= $r['id_sekolah']; ?>" class="btn btn-warning btn-flat">Cetak</a>
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