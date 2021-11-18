<?php
include "koneksi.php";

$kode_guru = $_POST['kode_guru'];
$nama_guru = $_POST['nama_guru'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO tb_guru (kode_guru, nama_guru, jk, alamat)  VALUES ('$kode_guru','$nama_guru','$jk','$alamat')";
$query = mysqli_query($db_link, $sql);
if($query) {
	header('location:data_guru.php');
} else {
	echo "gagal";
}

?>