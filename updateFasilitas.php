<?php
include("koneksi.php");
$A = $_POST['kode_fasilitas'];
$B = $_POST['kode_ruang'];
$C = $_POST['kode_servis'];
$D = $_POST['jenis_fasilitas'];

$query = mysql_query("update fasilitas set name_admin='$B',password='$C',jenis_fasilitas='$D' where kode_fasilitas='$A'");
if($query)
{echo"<script>alert('Data berhasil di Update');window.location='Fasilitas1.php';</script>";}
else
{echo"<script>alert('Data tidak berhasil di Update');window.location='edit_fasilitas.php';</script>";}

?>