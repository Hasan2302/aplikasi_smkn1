<?php
include "koneksi.php";

$id_mapel = $_POST['id_mapel'];
$nama_mapel = $_POST['nama_mapel'];

$sql2 = "UPDATE tb_mapel SET nama_mapel='$nama_mapel' WHERE id_mapel='$id_mapel'";
$query = mysqli_query($db_link, $sql2);
if($query) {
	header('location:data_mapel.php');
} else {
	echo "gagal";
}

?>