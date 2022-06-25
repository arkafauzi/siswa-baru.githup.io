<?php
include "koneksi.php";
if(isset($_GET['Id'])){
    mysqli_query($db, "delete from pendaftaran where Id_siswa='$_GET[Id]'");

 echo "<meta http-equiv=refresh content=2;URL='tabel_siswa.php'>";
}
header('Location: tabel_siswa.php');
?>
