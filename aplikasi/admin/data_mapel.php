<?php
 include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<nav>
	<h1>SMK INDONESIA</h1>
</nav>
<a href="../index.php"><input type="button" value="Back" class="cardnav"></a>
<a href="home.php"><input type="button" value="Home" class="cardnav"></a>
<a href="data_siswa.php"><input type="button" value="Data siswa" class="cardnav"></a>
<a href="data_guru.php"><input type="button" value="Data guru" class="cardnav"></a>
<a href="data_mapel.php"><input type="button" value="Data mapel" class="cardnav"></a>
<a href="data_kelas.php"><input type="button" value="Data kelas" class="cardnav"></a>
<a href="data_prodi.php"><input type="button" value="Data prodi" class="cardnav"></a>
<a href="nilai_siswa.php"><input type="button" value="Nilai siswa" class="cardnav"></a>
<div class="formcard">
<div class="formcard2">
	<form action="cek_login.php" method="POST">
		<label>username</label><br>
		<input type="text" name="username"><br>
		<label>password</label><br>
		<input type="password" name="password"><br>

		<input type="submit" value="OK">
	<br>
	<hr>
	<br>
	<img src="../img/RPL.jpg" width="80px" height="80px">
	</form>

</div>
<div class="formcard3">
		<h3 align="center">TABEL MAPEL</h3>
	<a href="tambah_mapel.php"><input type="button" value="Tambah"></a>
	<table class="tabel">
		<tr>
			<th><h3>NO</h3></th>
			<th><h3>ID MAPEL</h3></th>
			<th><h3>NAMA MAPEL</h3></th>
			<th></th>
		</tr>
<?php
 $no=1;
 $sql="SELECT * FROM tb_mapel";
 $query=mysqli_query($db_link, $sql);
 while ($data = mysqli_fetch_array($query))
 {
?>
		<tr align="center">
			<td><?php echo $no ;?><hr></td>
			<td><?php echo "$data[id_mapel]" ;?><hr></td>
			<td><?php echo "$data[nama_mapel]" ;?><hr></td>

			<td><a href="edit_mapel.php?id_mapel=<?php echo $data['id_mapel'];?>"><input type="button" value="edit"></a><hr></td>
			<td><a href="hapus_mapel.php?id_mapel=<?php echo $data['id_mapel'];?>"><input type="button" value="hapus"></a><hr></td>
			<?php $no++;
		}
		?>
		</tr>
	</table>
</div>
</div>
</body>
<footer>
	<h3>footer</h3>
</footer>
</html>