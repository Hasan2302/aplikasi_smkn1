<?php
include "koneksi.php";

$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];

$sql2 = "UPDATE tb_kelas SET nama_kelas='$nama_kelas' WHERE id_kelas='$id_kelas'";
$query = mysqli_query($db_link, $sql2);
if($query) {
	header('location:data_kelas.php');
} else {
	echo "gagal";
}

?>