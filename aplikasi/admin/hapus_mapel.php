<?php
include "koneksi.php";
	$id_mapel = $_GET['id_mapel'];
	$sql = "DELETE FROM tb_mapel WHERE id_mapel='$id_mapel'";
	$query = mysqli_query($db_link, $sql);
	if ($query) {
		header('location:data_mapel.php');
	} else {
		echo "gagal";
	}
	?>