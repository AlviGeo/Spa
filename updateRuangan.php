<?php
include("koneksi.php");
$A = $_POST['kode_ruang'];
$B = $_POST['id_therapist'];
$C = $_POST['kode_servis'];

$query = mysql_query("update ruangan set id_therapist='$B',kode_servis='$C' where kode_ruang='$A'");
if($query)
{echo"<script>alert('Data berhasil di Update');window.location='Ruangan1.php';</script>";}
else
{echo"<script>alert('Data tidak berhasil di Update');window.location='edit_ruangan.php';</script>";}

?>