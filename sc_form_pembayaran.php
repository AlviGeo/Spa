<?php
include("koneksi.php");
$a = $_POST ['id_pembayaran'];
$b = $_POST ['kode_booking'];
$c = $_POST ['kode_servis'];
$d = $_POST ['id_pelanggan'];
$e = $_POST ['deskripsi_pembayaran'];

$query = mysql_query ("insert into pembayaran (id_pembayaran, kode_booking, kode_servis, id_pelanggan, deskripsi_pembayaran)
values ('$a','$b','$c','$d','$e')");
 
if ($query)
{echo"<script>alert('Data Kode Pelanggan = $a Sudah Tersimpan');window.location='Pembayaran.php' ;</script>";}
else
{echo"<script>alert('Maaf data $a sudah ada');window.location='Pembayaran.php' ;</script>";}
?>