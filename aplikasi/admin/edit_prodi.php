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
	$id_prodi=$_GET['id_prodi'];
	$sql="SELECT * FROM tb_prodi WHERE id_prodi='$id_prodi'";
	$query=mysqli_query($db_link, $sql);
	$data=mysqli_fetch_array($query);
	?>
<nav>
	<h1>SMK INDONESIA</h1>
</nav>
<a href="home.php"><input type="button" value="Home" class="cardnav"></a>
<a href="data_prodi.php"><input type="button" value="Data Prodi" class="cardnav"></a>
<div class="formcard4">
	<h1 align="center">EDIT prodi</h1>
	<form action="aksiedit_prodi.php" method="POST">
		<label>ID PRODI</label><br>
		<input type="text" name="id_prodi" value="<?php echo "$data[id_prodi]"; ?>"><br>
		<label>NAMA PRODI</label><br>
		<input type="text" name="nama_prodi" value="<?php echo "$data[nama_prodi]"; ?>"><br>
		<input type="submit" name="submit">
	</form>
</div>
</body>
</html>