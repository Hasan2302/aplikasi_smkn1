<?php
include "koneksi.php";
	$id_kelas = $_GET['id_kelas'];
	$sql = "DELETE FROM tb_kelas WHERE id_kelas='$id_kelas'";
	$query = mysqli_query($db_link, $sql);
	if ($query) {
		header('location:data_kelas.php');
	} else {
		echo "gagal";
	}
	?>