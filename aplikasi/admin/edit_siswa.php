<?php
 include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>SMK INDONESIA</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<?php
	$nis_siswa=$_GET['nis_siswa'];
	$sql="SELECT * FROM tb_siswa WHERE nis_siswa='$nis_siswa'";
	$query=mysqli_query($db_link, $sql);
	$data=mysqli_fetch_array($query);
	?>
<nav>
	<h1>SMK INDONESIA</h1>
</nav>
<a href="home.php"><input type="button" value="Home" class="cardnav"></a>
<a href="data_siswa.php"><input type="button" value="Data siswa" class="cardnav"></a>
<a href="data_guru.php"><input type="button" value="Data guru" class="cardnav"></a>
<div class="formcard4">
	<h1>EDIT DATA SISWA</h1>
	<form action="aksiedit_siswa.php" method="POST">	
			<label>NIS</label><br>
			<input type="text" name="nis_siswa" value="<?php echo "$data[nis_siswa]" ;?>"><br>
			<label>NAMA</label><br>
			<input type="text" name="nama_siswa" value="<?php echo "$data[nama_siswa]" ;?>"><br>
			<label>JK</label><br>
			<input type="text" name="jk_siswa" value="<?php echo "$data[jk_siswa]" ;?>"><br>
			<label>ALAMAT</label><br>
			<input type="text" name="alamat_siswa" value="<?php echo "$data[alamat_siswa]" ;?>"><br>

			<input type="submit" value="OK">
	</form>	
</div>
</body>
<footer><h3>footer</h3></footer>
</html>