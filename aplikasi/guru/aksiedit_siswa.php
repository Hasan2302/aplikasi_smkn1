<?php
 include "koneksi.php";

 $nis_siswa	= $_POST['nis_siswa'];
 $nama_siswa	= $_POST['nama_siswa'];
 $jk_siswa	= $_POST['jk_siswa'];
 $alamat_siswa	= $_POST['alamat_siswa'];

 $sql2="UPDATE tb_siswa SET nama_siswa='$nama_siswa', jk_siswa='$jk_siswa', alamat_siswa='$alamat_siswa' WHERE nis_siswa='$nis_siswa'";
 $query=mysqli_query($db_link, $sql2);
 if ($query) {
 	header('location:data_siswa.php');
 } else {
 	echo "gagal";
 }
?>