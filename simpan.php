<?php
include_once("koneksi.php");
$nama=$_POST['nama'];
$email=$_POST['email'];
$no_telp=$_POST['no_telp'];
$pesan=$_POST['pesan'];
$timezone = time() + (60 * 60 * 8);
$tanggal= gmdate("Y-m-d H:i:s", $timezone);

$sql="insert into tb_pesan(nama, email, no_telp, pesan, tanggal) values ('$nama','$email','$no_telp','$pesan','$tanggal')";
mysqli_query($koneksi,$sql) or die (mysqli_error());
header('location: index.php');
?>
