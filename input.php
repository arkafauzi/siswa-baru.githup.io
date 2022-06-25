<?php include("koneksi.php"); ?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
	<!--awal container-->
<div class="container">
	<h3 class="text-center">Input Data Siswa</h3>

	
<!--awal col-md-6-->
		<div class="col-md-6 mx-auto">
			<!--awal card-->
			<div class="card">
 				 <div class="card-header bg-primary text-light">
   					 Form Input data
 				 </div>
 				 <div class="card-body">
   					<!--action-->
   					 <form action="simpan.php" method="POST">

   			<!--awal form-->
        <div class="row">	
   					 <div class="col-4"  >
   					 <div style="margin-left: 10px;"> <label class="label">Id Siswa</label></div>
          				<input type="text" class="form-control" name="id" placeholder="ID Siswa" >
          			</div>
          			 <div class="col-md-4">
          			 <div style="margin-left: 10px;"> <label class="label ">Nama</label></div>
          				<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" >
          			</div>
          			<div class="col-md-4">
          			<div style="margin-left: 10px">  <label class="label ">Agama</label></div>
          			<div style="padding: 10px;"><select class="form-select" name="agama" aria-label=".form-select-sm example"></div>
  						<option selected>Pilih Agama</option>
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
          				<div style="margin-left:6px;">  <input type="text" class="form-control" name="sekolah" ></p></div>
          			</div>
        </div>
      				<div class="col-md-12">
  						<div style="margin-left: 10px;"> <label class="form-label">Alamat</label></div>
					  	<div style="margin-left"><textarea class="form-control" name="alamat" rows="2"></textarea>
					</div>
   					<!--akhir form-->
   					
  				
  				 <!--footer-->
 				 <div class="card-footer bg-light">
 				 		 <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
  				 </div>
  				 <!-- akhir footer-->
			</div>	
			<!--akhir card-->
		</div>
<!--akhir col-md-6-->





<script	src="js/bootstrap.min.js"></script>

</body>
</html