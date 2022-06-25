<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <header>
        <h3 class="daftar">Daftar Siswa</h3>
    </header>

<div class="card text-right">
  <div class="card-header">
    <a class="btn btn-primary" href="input.php" role="button">+ Tambah</a>
  </div>	

    <div class="card-body">
    	
    	<table class="table ">
    <thead>
        <tr>
          
        	<th style="text-align: center;">No</th>
            <th style="text-align: center;"> ID Siswa</th>
            <th style="text-align: center;">Nama</th>
            <th style="text-align: center;">Jenis Kelamin</th>
            <th style="text-align: center;">Alamat</th>
            <th style="text-align: center;">Agama</th>
            <th style="text-align: center;">Sekolah Asal</th>
            <th colspan="2" style="text-align: center;">Tindakan</th>
       
        </tr>
    </thead>
    </div>
      <div class="card-footer text-muted">
      	</div>


	<?php
		$no=1;
        $query = mysqli_query($db, "select * from pendaftaran");
        while($siswa = mysqli_fetch_array($query)){
            echo"
            <tr>
            	<td>$no</td>
            	<td>$siswa[Id_siswa]</td>
            	<td>$siswa[Nama]</td>
            	<td>$siswa[Jk]</td>
            	<td>$siswa[Alamat]</td>
            	<td>$siswa[Agama]</td>
            	<td>$siswa[Sekolah_Asal]</td>

            	<td><a href='update siswa.php? Id=$siswa[Id_siswa]'> <button type='button' class='btn btn-primary'
        style='--bs-btn-padding-y: .10rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .70rem;'> Update </button></a></td>

            	<td><a href='delete.php? Id=$siswa[Id_siswa]' onClick=\"return confirm('Apakah Anda Ingin Menghapus Data ?');\"><button type='button' class='btn btn-danger'
        style='--bs-btn-padding-y: .10rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .75rem;'> Delete </button></a></td>
            <tr>";
            $no++;
        }
        ?>
    </table>



<script	src="js/bootstrap.min.js"></script>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>