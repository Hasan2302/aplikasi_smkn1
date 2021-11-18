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
		<h3 align="center">TABEL GURU</h3>
	<a href="tambah_guru.php"><input type="button" value="Tambah"></a>
	<table class="tabel">
		<tr>
			<th><h3>NO</h3></th>
			<th><h3>KODE GURU</h3></th>
			<th><h3>NAMA</h3></th>
			<th><h3>JK</h3></th>
			<th><h3>ALAMAT</h3></th>
			<th><h3></h3></th>
		</tr>
<?php
 $no=1;
 $sql="SELECT * FROM tb_guru";
 $query=mysqli_query($db_link, $sql);
 while ($data = mysqli_fetch_array($query))
 {
?>
		<tr align="center">
			<td><?php echo $no ;?><hr></td>
			<td><?php echo "$data[kode_guru]" ;?><hr></td>
			<td><?php echo "$data[nama_guru]" ;?><hr></td>
			<td><?php echo "$data[jk]" ;?><hr></td>
			<td><?php echo "$data[alamat]" ;?><hr></td>

			<td><a href="edit_guru.php?kode_guru=<?php echo $data['kode_guru'];?>"><input type="button" value="edit"></a><hr></td>
			<td><a href="hapus_guru.php?kode_guru=<?php echo $data['kode_guru'];?>"><input type="button" value="hapus"></a><hr></td>
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