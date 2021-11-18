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
	$id_mapel=$_GET['id_mapel'];
	$sql="SELECT * FROM tb_mapel WHERE id_mapel='$id_mapel'";
	$query=mysqli_query($db_link, $sql);
	$data=mysqli_fetch_array($query);
	?>
<nav>
	<h1>SMK INDONESIA</h1>
</nav>
<a href="home.php"><input type="button" value="Home" class="cardnav"></a>
<a href="data_mapel.php"><input type="button" value="Data Mapel" class="cardnav"></a>
<div class="formcard4">
	<h1 align="center">EDIT MAPEL</h1>
	<form action="aksiedit_mapel.php" method="POST">
		<label>ID MAPEL</label><br>
		<input type="text" name="id_mapel" value="<?php echo "$data[id_mapel]"; ?>"><br>
		<label>NAMA MAPEL</label><br>
		<input type="text" name="nama_mapel" value="<?php echo "$data[nama_mapel]"; ?>"><br>
		<input type="submit" name="submit">
	</form>
</div>
</body>
</html>