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
        max-width: 80px;
        max-height: 100px;
        border: 1px solid #ccc;
        border-radius: 10px;
        text-align: center;
        color: #fff;
        text-shadow: 1px 1px 2px lightblue, 0 0 25px blue, 0 0 5px lightblue;
        background-color: rgba(255, 255, 255, 0.5);
      }
      #days, #hours, #minutes, #seconds {
        font-size: 40px;
        border-bottom: 1px solid #ccc;
      }
</style>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<CENTER> <h1>PENGUMUMAN KELULUSAN</h1></CENTER>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table table-responsive">
                        <table class="table table-bordered table-striped" id="example1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal Penggumuman</th>
                                    <th>Waktu Penggumuman</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                               
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $be = mysqli_query($con, "SELECT * FROM psb where id_psb='$id_psb' ");
                                $no = 1;
                                while ($r = mysqli_fetch_assoc($be)) {
                                ?>
									<?php
                                              $tahun = substr($r["tgl_kelulusan"],0,4);
										
											  $bulan = substr($r["tgl_kelulusan"],5,2);
											  
											  $tanggal = substr($r["tgl_kelulusan"],8,2);
											
											  $jam = substr($r["tgl_kelulusan"],10,9);
                                            
											
											 ?>

                                    <tr>
                                        <td><?= $no; ?></td>
                                      
                                        <td><?= $r["nama_siswa"]; ?></td>
                                        <?php if ( $r["tgl_kelulusan"]== 0){?>
                                        <td>-</td>
                                        <?php }else{ ?>
                                        <td><?= $r["tgl_kelulusan"]; ?></td>
                                        <?php } ?>
                                                                      <!-- ---------------------------- -->
                                        <?php if ( $r["tgl_kelulusan"]== 0){?>
                                        <td>-</td>
                                       
                                        <?php }else {?>
                                    <td align="center">
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
							 <h3> <span style="color:orange" class="waktulullus" >`+days +`</span> Hari
							  <span style="color:orange" ">`+ hours + `</span> Jam
							  <span style="color:orange" ">`+ minutes +`</span> Menit
							  <span style="color:orange" ">` + seconds +`</span> Detik</h3>`;
							 
							  // If the countdown is finished, write some text
							  if (distance < 0) {
								  clearInterval(x);
								  document.getElementById("demo").innerHTML = 
							  `
							 <h3> <span style="color:orange" class="waktulullus" >00</span> Hari
							  <span style="color:orange" ">00</span> Jam
							  <span style="color:orange" "></span> Menit
							  <span style="color:orange" ">00</span> Detik</h3>`;
							  }
							  }, 1000);
							  </script>
                                      <?php if( date('Y-m-d h:i:s') > $r["tgl_kelulusan"]   AND $r["kelulusan"]  == 1){ ?><br>
									       
										<?php }elseif( date('Y-m-d h:i:s') > $r["tgl_kelulusan"]   AND $r["kelulusan"]  == 2){ ?><br>
											
								  	    <?php }else{?>
											<br>
											
                                        <?php } ?>
										
										
                                        </td>

									
										<?php

									
										
				
										
										}?>

										<script>
											function hasilnya(){
												alert('Terimakasih Telah menunggu , Semoga hasil memuaskan')
												window.location.reload();
											}
										</script>

                                        
										<!-- ---------------------------- -->
                                       
                                        <?php if( date('Y-m-d h:i:s') > $r["tgl_kelulusan"]   AND $r["kelulusan"]  == 1){ ?>
                                        <td>LULUS</td>
										<?php }elseif( date('Y-m-d h:i:s') > $r["tgl_kelulusan"]   AND $r["kelulusan"]  == 2){ ?>
                                        <td>TIDAK LULUS  </td>
								  	    <?php }else{?>
                                        <td>Pending</td>
                                        <?php } ?>
                                           <!-- ---------------------------- -->
										   
									    <?php if( date('Y-m-d h:i:s') > $r["tgl_kelulusan"]   AND $r["kelulusan"]  == 1){ ?>
										<td>Selamat Ananda <?= $r["nama_siswa"]; ?> <br>Dinyatakan Lulus di SMA Negeri 9 Merangin</td>
										<?php }elseif( date('Y-m-d h:i:s') > $r["tgl_kelulusan"]   AND $r["kelulusan"]  == 2){ ?>
										<td>Maaf Ananda <?= $r["nama_siswa"]; ?> Dinyatakan Tidak Lulus</td>
								  	    <?php }else{?>
										<td>Menunggu Pengumuman Kelulusan</td>
                                        <?php } ?>
										
										
                                      
                                      
                                         <td><a href="#" onclick="window.print()" class="btn btn-info">Cetak</a></td>
                                    </tr>
                                <?php $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
       
                <br>
<br>
<br>
<br>
<br>
<br>
<br>
