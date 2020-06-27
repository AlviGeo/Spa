<?php
include("koneksi.php");
$a = $_POST ['kode_servis'];
$b = $_POST ['jenis_servis'];
$c = $_POST ['harga_servis'];

$query = mysql_query ("insert into servis (kode_servis, jenis_servis, harga_servis)
values ('$a','$b','$c')");
 
if ($query)
{echo"<script>alert('Data Kode Servis = $a Sudah Tersimpan');window.location='Servis.php' ;</script>";}
else
{echo"<script>alert('Maaf data $a sudah ada');window.location='Servis.php' ;</script>";}
?>