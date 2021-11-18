<?php
 include "koneksi.php";

 $username	= $_POST['username'];
 $password	= $_POST['password'];
 $level	= $_POST['level'];
 $nis	= $_POST['nis'];

 $sql="INSERT INTO akun (username, password, level, nis) VALUES ('$username','$password','$level','$nis')";
 $query=mysqli_query($db_link, $sql);
 if ($query) {
 	header('location:index.php');
 } else {
 	echo "NIS tidak boleh sama";
 }
?>