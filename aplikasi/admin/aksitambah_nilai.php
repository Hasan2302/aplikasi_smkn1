<?php
 include "koneksi.php";

 $id_nilai	= $_POST['id_nilai'];
 $kode_guru	= $_POST['kode_guru'];
 $id_mapel	= $_POST['id_mapel'];
 $id_kelas	= $_POST['id_kelas'];
 $id_prodi	= $_POST['id_prodi'];
 $nis_siswa	= $_POST['nis_siswa'];
 $uh	= $_POST['uh'];
 $uts	= $_POST['uts'];
 $uas	= $_POST['uas'];

 if($na = ($uts + $uas + $uas)/3) {

 $sql = 
 mysqli_query($db_link,"INSERT INTO tb_nilai VALUES ('$id_nilai','$kode_guru','$id_mapel','$id_kelas','$id_prodi','$nis_siswa','$uh','$uts','$uas','$na')");
//  var_dump($_POST);
// var_dump($na);
// var_dump($sql);
// die;
 // $query=mysqli_query($db_link, $sql);
 if ($sql > 0) {
 	header("location:nilai_siswa.php");
 } else {
 	echo "NIS tidak boleh sama";
 }
}
?>