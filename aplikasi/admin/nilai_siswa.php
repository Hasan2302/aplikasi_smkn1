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
		<a href="tambah_nilai.php"><input type="button" value="Tamba"></a>
	<table class="tabel">
	<tr>     
        <th>NO</th>
        <th>ID NILAI</th>
		<th>KODE GURU</th>
		<th>ID MAPEL</th>
		<th>ID KELAS</th>
		<th>ID PRODI</th>
		<th>NIS SISWA</th>
		<th>NILAI UH</th>
		<th>NILAI UTS</th>
		<th>NILAI UAS</th>
		<th>NILAI NA</th>
		<th></th>
    </tr>
<?php
$no = 1;
$sql = "SELECT * FROM tb_nilai";
$query=mysqli_query($db_link,$sql);
 while ($data = mysqli_fetch_array($query)) 
  {
   ?>
        <tr align="center">
        <td><?php echo $no ;?><hr></td>
		<td><?php echo "$data[id_nilai]" ;?><hr></td>
		<td><?php echo "$data[kode_guru]" ;?><hr></td>
		<td><?php echo "$data[id_mapel]" ;?><hr></td>
		<td><?php echo "$data[id_kelas]" ;?><hr></td>
		<td><?php echo "$data[id_prodi]" ;?><hr></td>
		<td><?php echo "$data[nis_siswa]" ;?><hr></td>
		<td><?php echo "$data[uh]" ;?><hr></td>
		<td><?php echo "$data[uts]" ;?><hr></td>
		<td><?php echo "$data[uas]" ;?><hr></td>
		<td><?php echo "$data[na]" ;?><hr></td>

		<td><a href="editnilai.php?id_nilai=<?php echo $data['id_nilai'] ;?>"><input type="button" value="edit"></a>
		<a href="hapusnilai.php?id_nilai=<?php echo $data['id_nilai'] ;?>"><input type="button" value="hapus"></a><hr></td>
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