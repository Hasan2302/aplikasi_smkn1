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
	$id_nilai=$_GET['id_nilai'];
	$sql="SELECT * FROM tb_nilai WHERE id_nilai='$id_nilai'";
	$query=mysqli_query($db_link, $sql);
	$data=mysqli_fetch_array($query);
	?>
<nav>
	<h1>SMK INDONESIA</h1>
</nav>
<a href="../index.php"><input type="button" value="Back" class="cardnav"></a>
<a href="home.php"><input type="button" value="Home" class="cardnav"></a>
<a href="data_siswa.php"><input type="button" value="Data siswa" class="cardnav"></a>
<a href="data_guru.php"><input type="button" value="Data guru" class="cardnav"></a>
<div class="formcard4">
	<h1>EDIT NILAI</h1>
	<form action="aksiedit_nilai.php" method="POST">
<label>ID NILAI</label>
<input type="text" name="id_nilai" value="<?php echo "$data[id_nilai]" ;?>">
<br>
<label>KODE GURU</label>
<input type="text" name="kode_guru" value="<?php echo "$data[kode_guru]" ;?>">
<br>
<label>ID MAPEL</label>
<input type="text" name="id_mapel" value="<?php echo "$data[id_mapel]" ;?>">
<br>
<label>ID KELAS</label>
<input type="text" name="id_kelas" value="<?php echo "$data[id_kelas]" ;?>">
<br>
<label>ID PRODI</label>
<input type="text" name="id_prodi" value="<?php echo "$data[id_prodi]" ;?>">
<br>
<label>NIS SISWA</label>
<input type="text" name="nis_siswa" value="<?php echo "$data[nis_siswa]" ;?>">
<br>
<label>UH</label>
<input type="number" name="uh" value="<?php echo "$data[uh]" ;?>">
<br>
<label>UTS</label>
<input type="number" name="uts" value="<?php echo "$data[uts]" ;?>">
<br>
<label>UAS</label>
<input type="number" name="uas" value="<?php echo "$data[uas]" ;?>">
<br>
<label>NA</label>
<input type="number" name="na" value="<?php echo "$data[na]" ;?>">
<br>
<input id="submit-btn-l" style="margin-left: 65px;" type="submit" name="submit" value="MASUK"/>
<br>
</form>
</div>
</body>
<footer><h3>footer</h3></footer>
</html>