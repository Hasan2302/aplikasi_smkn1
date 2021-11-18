<?php
 include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah siswa</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<?php
	$kode_guru=$_GET['kode_guru'];
	$sql="SELECT * FROM tb_guru WHERE kode_guru='$kode_guru'";
	$query=mysqli_query($db_link, $sql);
	$data=mysqli_fetch_array($query);
	?>
<nav>
	<h1>SMK INDONESIA</h1>
</nav>
<a href="../index.php"><input type="button" value="Back" class="cardnav"></a>
<a href="home.php"><input type="button" value="Home" class="cardnav"></a>
<a href="data_siswa.php"><input type="button" value="Data Siswa" class="cardnav"></a>
<a href="data_guru.php"><input type="button" value="Data Guru" class="cardnav"></a>
<div class="formcard4">
	<h1 align="center">EDIT GURU</h1>
	<form action="aksiedit_guru.php" method="POST">
		<label>NIS</label><br>
		<input type="text" name="kode_guru" value="<?php echo "$data[kode_guru]"; ?>"><br>
		<label>NAMA</label><br>
		<input type="text" name="nama_guru" value="<?php echo "$data[nama_guru]"; ?>"><br>
		<label>JK</label><br>
		<input type="text" name="jk" value="<?php echo "$data[jk]"; ?>"><br>
		<label>ALAMAT</label><br>
		<input type="text" name="alamat" value="<?php echo "$data[alamat]"; ?>"><br>
		<input type="submit" name="submit">
	</form>
</div>
</body>
</html>