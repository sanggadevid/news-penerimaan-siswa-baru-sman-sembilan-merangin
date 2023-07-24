<?php





include "config/koneksi.php";



$p = mysqli_query($con, "SELECT * FROM psb where id_psb='$_GET[id_psb]'");
$psb = mysqli_fetch_array($p);


?>
<div style="padding:20px; ">

	<div class="row" style="margin-top:100px">
		<div class="col-xs-3  ">
			<img class="pull-right" src="./img/assets/logo.png" style="height:120px; width: 120px;" alt="logo-white">
		</div>
		<div class="col-xs-6">
			<center>
				<p> SMA NEGERI 9 <br> Muara Manderas, Kec. Jangkat, Kabupaten Merangin, Jambi  <br><?= date('d-m-Y') ?></p>
			</center>
			<h4> <span class="text-colored"></span></h4>
			<h4></h4>
		</div>
	</div>
	<br>
	<table width="100%" border="1" id="example1" class="table-bordered">
		<tr>
			<th colspan="3" align="center">Daftar Online</th>
		</tr>

		<tr>
			<th>Nama Anak</th>
			<th>:</th>
			<td><?= $psb['nama_siswa'] ?></td>
		</tr>
		<tr>
			<th>Jenis Kelamin</th>
			<th>:</th>
			<td><?= $psb['jk_siswa'] ?></td>
		</tr>
		<tr>
			<th>Tempat & Tanggal Lahir</th>
			<th>:</th>
			<td><?= $psb['tmpt_lahir'] ?> & <?= $psb['tgl_lahir'] ?></td>
		</tr>
		<tr>
			<th>SMP Asal Anak</th>
			<th>:</th>
			<td><?= $psb['smp_asal'] ?></td>
		</tr>
		<tr>
			<th>Ayah</th>
			<th>:</th>
			<td><?= $psb['ayah'] ?></td>
		</tr>
		<tr>
			<th>Ibu</th>
			<th>:</th>
			<td><?= $psb['ibu'] ?></td>
		</tr>
		<tr>
			<th>Pekerjaan Ayah</th>
			<th>:</th>
			<td><?= $psb['pk_ayah'] ?></td>
		</tr>
		<tr>
			<th>Pekerjaan Ibu</th>
			<th>:</th>
			<td><?= $psb['pk_ibu'] ?></td>
		</tr>
		<tr>
			<th>No Handphone</th>
			<th>:</th>
			<td><?= $psb['nohp'] ?></td>
		</tr>
		<tr>
			<th>Alamat Lengkap Ortu</th>
			<th>:</th>
			<td><?= $psb['alamat_ortu'] ?></td>
		</tr>
		<tr>
			<th>Kelurahan</th>
			<th>:</th>
			<td><?= $psb['kelurahan'] ?></td>
		</tr>
		<tr>
			<th>Kecamatan</th>
			<th>:</th>
			<td><?= $psb['kecamatan'] ?></td>
		</tr>
		<tr>
			<th>Kabupaten / Kota</th>
			<th>:</th>
			<td><?= $psb['kab_kota'] ?></td>
		</tr>
	</table>
	</body>
	<br>
	<table>
		<tr>
			<th>Keterangan </th>
			<td>:</td>
		</tr>
		<tr>
			<th rowspan="3">&nbsp;</th>
			<td>Setelah melakukan pendaftaran online dan mencetak formulir pndaftaran orang tua langsung mengantarkan formulir beserta biaya administrasi sebesar Rp. 200.000 ke kantor SMA Negeri 9 Muara Manderas, Kec. Jangkat, Kabupaten Merangin, Jambi </td>
		</tr>
		<tr>

			<td>Persyaratan yang harus di bawa orang tua :.</td>
		</tr>
		<tr>

			<td>1. Foto Copy KTP orarng tua masing-masing 1 rangkap<br>
				2. Foto Copy kartu keluarga(KK) 1 rangkap<br>
				3. Akte kelahirann anak 1 rangkap<br>
				4. Foto anak 3x4 sebanyak 2 lembar</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>

		</tr>
	</table>
</div>


<script>
	window.print()
</script>