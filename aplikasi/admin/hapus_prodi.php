<?php
include "koneksi.php";
	$id_prodi = $_GET['id_prodi'];
	$sql = "DELETE FROM tb_prodi WHERE id_prodi='$id_prodi'";
	$query = mysqli_query($db_link, $sql);
	if ($query) {
		header('location:data_prodi.php');
	} else {
		echo "gagal";
	}
	?>