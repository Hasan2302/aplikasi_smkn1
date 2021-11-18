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
	$id_kelas=$_GET['id_kelas'];
	$sql="SELECT * FROM tb_kelas WHERE id_kelas='$id_kelas'";
	$query=mysqli_query($db_link, $sql);
	$data=mysqli_fetch_array($query);
	?>
<nav>
	<h1>SMK INDONESIA</h1>
</nav>
<a href="home.php"><input type="button" value="Home" class="cardnav"></a>
<a href="data_kelas.php"><input type="button" value="Data Kelas" class="cardnav"></a>
<div class="formcard4">
	<h1 align="center">EDIT KELAS</h1>
	<form action="aksiedit_kelas.php" method="POST">
		<label>ID KELAS</label><br>
		<input type="text" name="id_kelas" value="<?php echo "$data[id_kelas]"; ?>"><br>
		<label>NAMA KELAS</label><br>
		<input type="text" name="nama_kelas" value="<?php echo "$data[nama_kelas]"; ?>"><br>
		<input type="submit" name="submit">
	</form>
</div>
</body>
</html>