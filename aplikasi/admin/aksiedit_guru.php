<?php
include "koneksi.php";

$kode_guru = $_POST['kode_guru'];
$nama_guru = $_POST['nama_guru'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

$sql2 = "UPDATE tb_guru SET nama_guru='$nama_guru', jk='$jk', alamat='$alamat' WHERE kode_guru='$kode_guru'";
$query = mysqli_query($db_link, $sql2);
if($query) {
	header('location:data_guru.php');
} else {
	echo "gagal";
}

?>