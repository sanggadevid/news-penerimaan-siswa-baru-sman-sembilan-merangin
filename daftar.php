<section class="parallax parallax1" style="background:#000 url('img/backgrounds/bg-dark3.jpg') 50% 0 no-repeat fixed;">
            <div class="dark-overlay p-t-b-80" data-overlay-opacity="0">
                <div class="container">
                    <div class="row">
                        <h1 class="col-sm-12 text-light text-center" data-aos="fade-down" data-aos-delay="0">- DAFTAR -</h1>
                    </div>
                </div>
            </div>
        </section>
<section id="contact-field" class="p-t-b-80">
            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="number" class="form-control input-lg" id="nik" name="nik" placeholder="NIK*" required data-error="Please fill in your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
							<div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="nama_lengkap" placeholder="Nama Lengkap*" required data-error="Please enter a valid e-mail address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="tmpt_lahir" placeholder="Tempat Dan Tanggal Lahir*" required data-error="Please enter a valid e-mail address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="umur" placeholder="Umur*" required data-error="Please write your message">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="jenis_kelamin" placeholder="Jenis Kelamin*" required data-error="Please write your message">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="alamat" placeholder="Alamat*" required data-error="Please write your message">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="agama" placeholder="Agama*" required data-error="Please write your message">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="status_perkawinan" placeholder="Status Perkawinan*" required data-error="Please write your message">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="pekerjaan" placeholder="Pekerjaan*" required data-error="Please write your message">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="kewarganegaraan" placeholder="Kewarganegaraan*" required data-error="Please write your message">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="number"  class="form-control input-lg" name="no_telp" placeholder="No Handphone/WA*" required data-error="Please write your message">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <input type="email" class="form-control input-lg" name="email" placeholder="Email*" required data-error="Please write your message">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        
                        <input type="submit" name="daftar" class="btn btn-colored btn-lg center-block m-t-20" value="Daftar">
                    </form>
                    
                </div>
            </div>
        </section>
		
<?php 
if(isset($_POST["daftar"])){
	mysqli_query($con, "INSERT INTO tb_pembeli values('','$_POST[nik]','$_POST[nama_lengkap]',
	'$_POST[tmpt_lahir]','$_POST[umur]','$_POST[jenis_kelamin]','$_POST[alamat]','$_POST[agama]','$_POST[status_perkawinan]'
	,'$_POST[pekerjaan]','$_POST[kewarganegaraan]','$_POST[no_telp]','$_POST[email]','$_POST[no_telp]')");
	
	$id= mysqli_insert_id($con);
	
	mysqli_query($con, "INSERT INTO tb_user values('','$id','$_POST[no_telp]','$_POST[no_telp]','pembeli')");
	
	echo"<script>window.alert('Sukses Daftar'); window.location='?module=form_pemesanan&id=$id';</script>";
}
?>