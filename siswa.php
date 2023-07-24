<?php
include "config/koneksi.php";
$id_psb = $_SESSION['id_psb'];
   
$p = mysqli_query($con, "SELECT * FROM psb where id_psb='$id_psb'");
$psb = mysqli_fetch_array($p);


?>
<style>
        waktulullus {
        display: inline-block;
        padding: 5px;
        max-width: 180px;
        max-height:1100px;
        border: 1px solid #ccc;
        border-radius: 10px;
        text-align: center;
        color: #fff;
        text-shadow: 1px 1px 2px lightblue, 0 0 25px blue, 0 0 5px lightblue;
        background-color: rgba(255, 255, 255, 0.5);
      }
      #days, #hours, #minutes, #seconds {
        font-size: 140px;
        border-bottom: 1px solid #ccc;
      }
</style>
<div style="padding:20px; ">

	<div class="row" style="margin-top:100px">
		<div class="col-xs-3  ">
			<img class="pull-right" src="./img/assets/logo.png" style="height:120px; width: 120px;" alt="logo-white">
		</div>
		<div class="col-xs-6">
			<center>
        
				<p> SMA NEGERI 9 <br> Muara Manderas, Kec. Jangkat, Kabupaten Merangin, Jambi  <br><?= date('d-m-Y') ?></p>
			</center>
			<h1> <span class="text-colored"></span></h1>
			
		</div>
	</div>
	<br>
	<table width="100%" border="1" id="example1" class="table-bordered table-striped">
		<tr>
			<h1 colspan="3" align="center"  >PROFIL PENDAFTAR</>
		</tr>

		<tr>
			<th>Nama </th>
			<th>:</th>
			<td ><?= $psb['nama_siswa'] ?></td>
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
			
		</tr>
		<tr>

			<td>Setelah melakukan pendaftaran online dan melakukan seleksi maka hasil dapat dilihat bawah ini :</td>
			<td></td>
		</tr>
	

		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>

		</tr>
	</table>
</div>

<?php
                                $be = mysqli_query($con, "SELECT * FROM psb where id_psb='$id_psb' ");
                               
                                while ($r = mysqli_fetch_assoc($be)) {
                                ?>
									<?php
                                              $tahun = substr($r["tgl_kelulusan"],0,4);
										
											  $bulan = substr($r["tgl_kelulusan"],5,2);
											  
											  $tanggal = substr($r["tgl_kelulusan"],8,2);
											
											  $jam = substr($r["tgl_kelulusan"],10,6);
											
											 ?>

                                        <?php if ( $r["tgl_kelulusan"]== 0){?>
                                     
                                       
                                        <?php }else {?>
                                        
                                       <center>
									   <p id="demo"></p>
                              
							  <script>
							  // Set a valid end date
							  var countDownDate = new Date("<?= $r["tgl_kelulusan"] ?>").getTime();

							  // Update the count down every 1 second
							  var x = setInterval(function() {

							  // Get today's date and time
							  var now = new Date().getTime();

							  // Find the distance between now and the countdown date
							  var distance = countDownDate - now;

							  // Calculate Remaining Time
							  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
							  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
							  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
							  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

							  // Display the result in the element with id="demo"
							  document.getElementById("demo").innerHTML =
							  `
							 <h1> <span style="color:orange" class="waktulullus" >`+days +`</span> Hari
							  <span style="color:orange" ">`+ hours + `</span> Jam
							  <span style="color:orange" ">`+ minutes +`</span> Menit
							  <span style="color:orange" ">` + seconds +`</span> Detik</h1>`;
							 
							  // If the countdown is finished, write some text
							  if (distance < 0) {
								  clearInterval(x);
								  document.getElementById("demo").innerHTML =  `
							 <h1> <span style="color:orange" class="waktulullus" >00</span> Hari
							  <span style="color:orange" ">00</span> Jam
							  <span style="color:orange" "></span> Menit
							  <span style="color:orange" ">00</span> Detik</h1>`;
							  }
							  }, 1000);
							  </script>

										
									   </center>
									   <br>
						<center>

						<button onclick="hasilnya()" class="btn btn-danger btn-flat">Lihat Hasil</button>
						</center>
					<br><br><br><br>
                                        <

                                    
										
										

									
										<?php }} ?>

										<script>
											function hasilnya(){
												alert('Terimakasih Telah menunggu , Semoga hasil memuaskan')
												window.location.href ='http://localhost/sman9_merangin/index.php?module=hasilpengumuman';
											}
										</script>
