<?php
include "koneksi.php";

$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];

$sql = "INSERT INTO tb_kelas (id_kelas, nama_kelas)  VALUES ('$id_kelas','$nama_kelas')";
$query = mysqli_query($db_link, $sql);
if($query) {
	header('location:data_kelas.php');
} else {
	echo "gagal";
}

?>