<?php
$hostname="localhost";
$username="root";
$pass="";
$db="tubespti";

$koneksi=mysqli_connect($hostname,$username,$pass,$db);
// check koneksi
if (mysqli_connect_errno()) {
  echo "Koneksi Database Gagal :" .mysqli_connect_error();
}
?>