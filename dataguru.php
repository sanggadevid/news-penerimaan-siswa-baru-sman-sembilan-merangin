<section style="margin-top:100px" class="content">
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
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jabatan</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $be = mysqli_query($con, "SELECT * FROM tenaga_kp ORDER BY id_tkp ASC ");
                                $no = 1;
                                while ($r = mysqli_fetch_assoc($be)) {
                                ?>

                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><img src="./img/guru/<?= $r["foto"]; ?>" style="width:100px;"></td>
                                        <td><?= $r["nama_guru"]; ?></td>
                                        <td><?= $r["jk_g"]; ?></td>
                                        <td><?= $r["jabatan_g"]; ?></td>
                                        <td><?= $r["alamat_g"]; ?></td>

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