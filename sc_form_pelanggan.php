<?php
include("koneksi.php");
$a = $_POST ['id_pelanggan'];
$b = $_POST ['nama_pelanggan'];
$c = $_POST ['no_tep'];

$query = mysql_query ("insert into pelanggan (id_pelanggan,nama_pelanggan,no_tep)
values ('$a','$b','$c')");
 
if ($query)
{echo"<script>alert('Data Kode Pelanggan = $a Sudah Tersimpan');window.location='Pelanggan.php' ;</script>";}
else
{echo"<script>alert('Maaf data $a sudah ada');window.location='Pelanggan.php' ;</script>";}
?>