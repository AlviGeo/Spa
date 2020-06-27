<?php
include("koneksi.php");
$a = $_POST ['kode_fasilitas'];
$b = $_POST ['kode_ruang'];
$c = $_POST ['kode_servis'];
$d = $_POST ['jenis_fasilitas'];

$query = mysql_query ("insert into fasilitas (kode_fasilitas,kode_ruang,kode_servis,jenis_fasilitas)
values ('$a','$b','$c','$d')");
 
if ($query)
{echo"<script>alert('Data Kode Fasilitas = $a Sudah Tersimpan');window.location='Fasilitas.php' ;</script>";}
else
{echo"<script>alert('Maaf data $a sudah ada');window.location='Fasilitas.php' ;</script>";}
?>