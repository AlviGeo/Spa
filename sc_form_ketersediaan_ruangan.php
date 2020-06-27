<?php
include("koneksi.php");
$a = $_POST ['jumlah_ruangan_tersedia'];
$b = $_POST ['kode_ruang'];
$c = $_POST ['total_ruang_disediakan'];
$d = $_POST ['id_admin'];

$query = mysql_query ("insert into ketersediaan_ruangan (jumlah_ruangan_tersedia,kode_ruang,total_ruang_disediakan,id_admin)
values ('$a','$b','$c','$d')");
 
if ($query)
{echo"<script>alert('Data Kode Ketersediaan Ruangan = $a Sudah Tersimpan');window.location='Ketersediaan_Ruangan.php' ;</script>";}
else
{echo"<script>alert('Maaf data $a sudah ada');window.location='Ketersediaan_Ruangan.php' ;</script>";}
?>