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
		<h3>TABEL SISWA</h3>
		<a href="tambah_siswa.php"><input type="button" value="Tambah" align="left"></a>
	<table class="tabel">
		<tr>
			<th><h3>NO</h3></th>
			<th><h3>NIS</h3></th>
			<th><h3>NAMA</h3></th>
			<th><h3>JK</h3></th>
			<th><h3>ALAMAT</h3></th>
			<th><h3></h3></th>
		</tr>
<?php
$no=1;
$sql="SELECT * FROM tb_siswa";
$query=mysqli_query($db_link, $sql);
while ($data = mysqli_fetch_array($query))
{
?>
	<tr align="center">
		<td><?php echo $no;?><hr></td>
		<td><?php echo "$data[nis_siswa]" ;?><hr></td>
		<td><?php echo "$data[nama_siswa]" ;?><hr></td>
		<td><?php echo "$data[jk_siswa]" ;?><hr></td>
		<td><?php echo "$data[alamat_siswa]" ;?><hr></td>

		<td><a href="edit_siswa.php?nis_siswa=<?php echo $data['nis_siswa'] ;?>"><input type="button" value="edit"></a><hr></td>
		<td><a href="hapus_siswa.php?nis_siswa=<?php echo $data['nis_siswa'] ;?>"><input type="button" value="hapus"></a><hr></td>
		<?php $no++;
	}
	?>
	</tr>
	</table>
</div>
</div>
</body>
<footer><h3>footer</h3></footer>
</html>