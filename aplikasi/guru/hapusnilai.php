<?php
include 'koneksi.php';
	$id_nilai = $_GET['id_nilai'];
	$sql = "DELETE FROM tb_nilai WHERE id_nilai='$id_nilai'";
	$query=mysqli_query($db_link, $sql);
if ($query) {
	header('location:nilai_siswa.php');
} else {
	echo "gagal";
}
	?>