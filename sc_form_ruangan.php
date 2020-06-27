<?php
include("koneksi.php");
$a = $_POST ['kode_ruang'];
$b = $_POST ['id_therapist'];
$c = $_POST ['kode_servis'];

$query = mysql_query ("insert into ruangan (kode_ruang, id_therapist, kode_servis)
values ('$a','$b','$c')");
 
if ($query)
{echo"<script>alert('Data Kode Ruangan = $a Sudah Tersimpan');window.location='Ruangan.php' ;</script>";}
else
{echo"<script>alert('Maaf data $a sudah ada');window.location='Ruangan.php' ;</script>";}
?>