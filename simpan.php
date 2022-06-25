<?php
include("koneksi.php");
if(isset($_POST['proses'])){
         mysqli_query($db, "insert into pendaftaran set
            Id_siswa = '$_POST[id]',
            Nama = '$_POST[nama]',
            Jk = '$_POST[jk]',
            Alamat = '$_POST[alamat]',
            Agama = '$_POST[agama]',
            Sekolah_Asal= '$_POST[sekolah]'");
            
        }
         header('Location: tabel_siswa.php');
 ?>