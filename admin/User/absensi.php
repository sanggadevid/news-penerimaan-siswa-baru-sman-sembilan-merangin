<div class="content-wrapper">




    <section class="content-header">
        <h1>
            Absensi Sekolah
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Absensi Sekolah</li>
        </ol>
    </section>
    <section class="content">
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
                                        <th>NSPN</th>
                                        <th>Nama Sekolah</th>
                                        <th>Alamat</th>
                                        <th>Usernme</th>
                                        <th>Password</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $be = mysqli_query($con, "SELECT * FROM sekolah  ORDER BY id_sekolah ASC");
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
                                                <form action="?module=lihatabsen" method="post">
                                                    <div class="row">
                                                        <div class="col-xs-6">


                                                            <select name="tahun" required class="form-control">
                                                                <option value="">-Tahun-</option>
                                                                <?php
                                                                $v = date('Y');
                                                                for ($i = 2019; $i <= $v; $i++) {
                                                                    if ($i == $v) { ?>
                                                                        <option value="<?= $i ?>"><?= $i ?></option>
                                                                    <?php } else {  ?>
                                                                        <option value="<?= $i ?>"><?= $i ?></option>
                                                                <?php }
                                                                } ?>
                                                            </select>
                                                            <input type="hidden" name="id" value="<?= $r['id_sekolah']; ?>">
                                                            <input type="hidden" name="nama_sekolah" value="<?= $r["nama_sekolah"]; ?>">


                                                        </div>

                                                        <div class="col-xs-6">
                                                            <button class="btn btn-success btn-flat" name="lihat">Lihat</button>
                                                        </div>

                                                    </div>
                                                </form>

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


</div>