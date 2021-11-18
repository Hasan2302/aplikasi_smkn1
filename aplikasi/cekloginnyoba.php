<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($db_link, "select * from akun username='$username' and password='$password'");
$data=mysqli_fetch_array($sql);
if ($data['level']== 1){
	session_start();
	$_SESSION['nama'] = $data['username'];
	$_SESSION['level'] = $data['level'];
	header('location:admin.php');
} elseif ($data['level']== 2){
	session_start();
	$_SESSION['nama'] = $data['username'];
	$_SESSION['level'] = $data['level'];
	header('location:guru.php');
} elseif ($data['level']== 3){
	session_start();
	$_SESSION['nama'] = $data['username'];
	$_SESSION['level'] = $data['level'];
	$_SESSION['nis'] = $data['nis'];
	header('location:siswa.php');
} else {
	echo "<alert> gagal </alert>";
	header('location:home.php');
}
?>