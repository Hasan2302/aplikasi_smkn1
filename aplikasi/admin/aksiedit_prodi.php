<?php
include "koneksi.php";

$id_prodi = $_POST['id_prodi'];
$nama_prodi = $_POST['nama_prodi'];

$sql2 = "UPDATE tb_prodi SET nama_prodi='$nama_prodi' WHERE id_prodi='$id_prodi'";
$query = mysqli_query($db_link, $sql2);
if($query) {
	header('location:data_prodi.php');
} else {
	echo "gagal";
}

?>