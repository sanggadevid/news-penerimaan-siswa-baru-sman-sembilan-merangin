<div class="content-wrapper">

    <section class="content-header">
        <h1>

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Absensi Sekolah</li>
        </ol>
    </section>

    <br>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div style="margin-top:20px" class="text-center">
                        <div class="row">
                            <div class="col-xs-3  ">
                                <img class="pull-right" src="../../img/assets/logo.png" style="height:150px; width: 120px;" alt="logo-white">
                            </div>
                            <div class="col-xs-8">
                                <p> PEMERINTAH KABUPATEN MERANGIAN
                                    DINAS PENDIDIKAN DAN KEBUDAYAAN
                                    KANTOR WILAYAH SATUAN PENDIDIKAN
                                    WILAYAH JANGKAT</p>
                                <?php $sekolah = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM sekolah where id_sekolah='$_GET[id]'"));
                                ?>
                                <h4>Absensi <span class="text-colored">Bulan : <?= getBulan($_GET['bulan']) ?>-<?= $_GET['tahun'] ?></span></h4>
                                <h4> <?= $sekolah['nama_sekolah'] ?></h4>
                            </div>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Guru
                                                <br>
                                                <hr> Nomor Induk Pegawai (NIP)
                                            </th>
                                            <th>L/P</th>
                                            <th>Ijazah Tertinggi Tahun
                                                <br>
                                                <hr>Nomor Ijazah
                                            </th>
                                            <th>Jabatan</th>
                                            <th>Gol</th>
                                            <th>Masa Kerja Tahun</th>
                                            <th>Masa Kerja Bulan</th>
                                            <th>Mengajar Di Kelas</th>
                                            <th>Tanggal Mulai Mnggajar Diisekolah Ini</th>
                                            <th>Nomor SK Terakhir</th>
                                            <th> Sakit</th>
                                            <th> Izin </th>
                                            <th> Alfa</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $be = mysqli_query($con, "SELECT * FROM pegawai a Join absensi b ON a.id_pegawai=b.id_pegawai where b.id_sekolah='$_GET[id]' AND b.bulan='$_GET[bulan]' AND b.tahun='$_GET[tahun]' order BY a.id_pegawai ASC");
                                        $no = 1;
                                        while ($r = mysqli_fetch_assoc($be)) {
                                        ?>

                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?= $r["nama_pegawai"]; ?> <br><?= $r["nip"]; ?> </td>
                                                <td><?= $r["jk"]; ?></td>
                                                <td><?= $r["ijazah"]; ?></td>
                                                <td><?= $r["jabatan"]; ?></td>
                                                <td><?= $r["gol"]; ?></td>
                                                <td><?= $r["tahun_masa_kerja"]; ?></td>
                                                <td><?= $r["bulan_masa_kerja"]; ?></td>
                                                <td><?= $r["kelas_ajar"]; ?></td>
                                                <td><?= $r["tgl_mulai_mengajar"]; ?></td>
                                                <td><?= $r["nomor_sk"]; ?></td>

                                                <td><?= $r["sakit"]; ?></td>
                                                <td><?= $r["izin"]; ?></td>
                                                <td><?= $r["alfa"]; ?></td>
                                                <td><?= $r["jumlah"]; ?></td>
                                                <td><?= $r["keterangan"]; ?></td>

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

<script>
    window.print()
</script>