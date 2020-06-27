<?php
include("koneksi.php");
$A = $_POST['kode_servis'];
$B = $_POST['jenis_servis'];
$C = $_POST['harga_servis'];

$query = mysql_query("update servis set jenis_servis='$B', harga_servis='$C' where kode_servis='$A'");
if($query)
{echo"<script>alert('Data berhasil di Update');window.location='Servis1.php';</script>";}
else
{echo"<script>alert('Data tidak berhasil di Update');window.location='edit_servis.php';</script>";}

?>