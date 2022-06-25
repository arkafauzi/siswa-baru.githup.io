<?php 
include ("koneksi.php"); 
$sql = mysqli_query($db, "select * from pendaftaran where Id_siswa='$_GET[Id]'");
$data = mysqli_fetch_array($sql);
?>
<html>
<head>I
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
	<!--awal container-->
<div class="container">
	<h3 class="text-center">Update Data Siswa</h3>

	
<!--awal col-md-6-->
		<div class="col-md-6 mx-auto">
			<!--awal card-->
			<div class="card">
 				 <div class="card-header bg-primary text-light">
   					 Form Update Siswa
 				 </div>
 				 <div class="card-body">
   					<!--action-->
   					 <form action="" method="POST">

   			<!--awal form-->
        <div class="row">	
   			<div class="col-3"  >
   				<div style="margin-left: 10px;"> <label class="label">Id Siswa</label></div>
          				<input type="text" class="form-control" name="id" value="<?php echo $data['Id_siswa'];?>" placeholder="ID Siswa" readonly >
          	</div>
          	<div class="col-md-5">
          		<div style="margin-left: 10px;"> <label class="label ">Nama</label></div>
          				<input type="text" class="form-control" name="nama" value="<?php echo $data['Nama'];?>" placeholder="Nama Lengkap" >
          	</div>
          	<div class="col-md-4">
          		<div style="margin-left: 10px">  <label class="label ">Agama</label></div>
          		<div style="padding: 10px;"><select class="form-select" name="agama" aria-label=".form-select-sm example"></div>
  						<option selected>-Pilih-</option>
  						<option value="Islam">Islam</option>
  						<option value="Kristen">Kristen</option>
  						<option value="Hindu">Hindu</option>
  						<option value="Budha">Budha</option>
  						<option value="Konghucu">Konghucu</option>
					</select>
          	</div>
        </div>		

        <div class="row">
          	<div class="col-md-4">
          		<p><div style="margin-left: 12px">  <label class="label ">Jenis Kelamin</label></div>
          		<div style="padding: 10px;"><select class="form-select" name="jk" aria-label=".form-select-sm example"></div>
  						<option selected>-pilih-</option>
  						<option value="Laki-laki">Laki-Laki</option>
  						<option value="Perempuan">Perempuan</option>
					</select></p>
				</div>
			</div>
			<div class="col-md-8">
				<p><div style="margin-left: 16px;"> <label class="label">Sekolah Asal</label></div>
          		<div style="margin-left:6px;">  <input type="text" class="form-control" name="sekolah" value="<?php echo $data['Sekolah_Asal'];?>" ></p></div>
          	</div>
        </div>

      		<div class="col-md-12">
  				<div style="margin-left: 10px;"> <label class="form-label">Alamat</label></div>
				<div style="margin-right:25px;"><textarea class="form-control" name="alamat" rows="2" value="<?php echo $data['Alamat'];?>"></textarea></div>
			</div>
   					<!--akhir form-->
   					
  				
  				 <!--footer-->
 				 <div class="card-footer bg-light">
 				 	<button type="submit"  class="btn btn-primary" name="proses">Ubah</button>
  				 </div>
  				 <!-- akhir footer-->
			</div>	
			<!--akhir card-->
		</div>
<!--akhir col-md-6-->


<script	src="js/bootstrap.min.js"></script>

<?php
if(isset($_POST['proses'])){
         mysqli_query($db, "update pendaftaran set
            Nama = '$_POST[nama]',
            Jk = '$_POST[jk]',
            Alamat = '$_POST[alamat]',
            Agama = '$_POST[agama]',
            Sekolah_Asal = '$_POST[sekolah]'	
         where Id_siswa = '$_GET[Id]'");
         
			   header('Location: tabel_siswa.php');
}
 ?>
</body>
</html