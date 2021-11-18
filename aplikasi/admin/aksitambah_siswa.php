<?php
 include "koneksi.php";

 $nis_siswa	= $_POST['nis_siswa'];
 $nama_siswa	= $_POST['nama_siswa'];
 $jk_siswa	= $_POST['jk_siswa'];
 $alamat_siswa	= $_POST['alamat_siswa'];

 $sql="INSERT INTO tb_siswa (nis_siswa, nama_siswa, jk_siswa, alamat_siswa) VALUES ('$nis_siswa','$nama_siswa','$jk_siswa','$alamat_siswa')";
 $query=mysqli_query($db_link, $sql);
 if ($query) {
 	header('location:data_siswa.php');
 } else {
 	echo "NIS tidak boleh sama";
 }
?>