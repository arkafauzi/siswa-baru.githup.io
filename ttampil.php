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

    <br>

<div class="row">
<div class="col-md-15 mx-right">
<div class="card">
   <div class="card-body">
     <table border="1" class="table1">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Siswa</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th colspan="2">Tindakan</th>
        </tr>
    </thead>
  </div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  + Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                            <!--awal form-->
        <form class = "row" action="simpan.php" method="POST">
<!---------------------------------------------------------------------------------->
        
                    <!--akhir form-->   

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save </button>
      </div>
    </div>
  </div>
</div>
</form>

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

            	<td><a href=''> <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'> Update </button></a></td>

            	<td><a href='delete.php? Id=$siswa[Id_siswa]' onClick=\"return confirm('Yakin anda akan menghapus?');\"> <button class='btn-delete'> Delete </button></a></td>
            <tr>";
            $no++;
        }
        ?>
    
    </table>



    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
<script src="js/bootstrap.min.js"></script>

</body>
</html>