<?php

include 'koneksi.php';

$id_nilai 		= $_POST['id_nilai'];
$kode_guru		= $_POST['kode_guru'];
$id_mapel		= $_POST['id_mapel'];
$id_kelas		= $_POST['id_kelas'];
$id_prodi 		= $_POST['id_prodi'];
$nis_siswa		= $_POST['nis_siswa'];
$uh				= $_POST['uh'];
$uts			= $_POST['uts'];
$uas 			= $_POST['uas'];
$na				= $_POST['na'];


$sql= "UPDATE tb_nilai SET kode_guru='$kode_guru', id_mapel='$id_mapel', id_nilai='$id_kelas', id_prodi='$id_prodi', nis_siswa='$nis_siswa', uh='$uh', uts='$uts', uas='$uas', na='$na' WHERE id_nilai='$id_nilai'";

$query=mysqli_query($db_link, $sql);
if ($query) {
	header('location:nilai_siswa.php');
} else {
	echo "gagal";
}
?>