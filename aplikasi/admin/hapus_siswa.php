<?php
include "koneksi.php";
	$nis_siswa=$_GET['nis_siswa'];
	$sql="DELETE FROM tb_siswa WHERE nis_siswa='$nis_siswa'";
	$query=mysqli_query($db_link, $sql);
	if ($query) {
		header('location:data_siswa.php');
	} else {
		echo "gagal";
	}
	?>