<?php
include "koneksi.php";
	$kode_guru = $_GET['kode_guru'];
	$sql = "DELETE FROM tb_guru WHERE kode_guru='$kode_guru'";
	$query = mysqli_query($db_link, $sql);
	if ($query) {
		header('location:data_guru.php');
	} else {
		echo "gagal";
	}
	?>