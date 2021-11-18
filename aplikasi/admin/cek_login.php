<?php 
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($db_link,"select * from akun where username='$username' and password='$password'");
$data = mysqli_fetch_array($sql);
if ($data['level']== 1) {
    session_start();
    $_SESSION['nama'] = $data['username'];
    $_SESSION['level'] = $data['level'];
    header("location:home.php");
}elseif ($data['level']== 2) {
    session_start();
    $_SESSION['nama'] = $data['username'];
    $_SESSION['level'] = $data['level'];
    header("location:../guru/data_guru.php");
}elseif ($data['level'] == 3 ) {
    session_start();
    $_SESSION['nama'] = $data['username'];
    $_SESSION['level'] = $data['level'];
    $_SESSION['nis'] = $data['nis'];
    header("location:../siswa/nilai_siswa.php");
}else{
    echo "<alert> Login Gagal Harap coba lagi </alert>";
    header("location:home.php");
}


?>