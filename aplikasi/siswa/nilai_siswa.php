<?php
session_start();
if ($_SESSION['level']== 0) {
	header('location:home.php');
}
?>

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
	<h1>HALAMAN SISWA</h1>
</nav>
<a href="../index.php"><input type="button" value="Back" class="cardnav"></a>
<a href="home.php"><input type="button" value="Home" class="cardnav"></a>
<a href="data_siswa.php"><input type="button" value="Data siswa" class="cardnav"></a>
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
	<table class="tabel">
	<tr>     
        <th>NO</th>
        <th>NAMA SISWA</th>
        <th>NIS SISWA</th>
		<th>KELAS</th>
		<th>MAPEL</th>
		<th>PRODI</th>
		<th>NILAI</th>
		<th></th>
    </tr>
<?php
$nis = $_SESSION['nis'];
$no=1;
$sql="SELECT * FROM tb_siswa,tb_kelas,tb_mapel,tb_prodi,tb_nilai WHERE tb_siswa.nis_siswa=tb_nilai.nis_siswa AND tb_kelas.id_kelas=tb_nilai.id_kelas AND tb_mapel.id_mapel=tb_nilai.id_mapel AND tb_prodi.id_prodi=tb_nilai.id_prodi AND tb_siswa.nis_siswa='$nis'";
$query=mysqli_query($db_link,$sql);
while ($data=mysqli_fetch_array($query))
{
?>
	<tr align="center">
        <td><?php echo $no ;?><hr></td>
		<td><?php echo "$data[nama_siswa]" ;?><hr></td>
		<td><?php echo "$data[nis_siswa]" ;?><hr></td>
		<td><?php echo "$data[id_kelas]" ;?><hr></td>
		<td><?php echo "$data[id_mapel]" ;?><hr></td>
		<td><?php echo "$data[id_prodi]" ;?><hr></td>
		<td><?php echo "$data[na]" ;?><hr></td>
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