<?php
include("koneksi.php");
$a = $_POST ['id_perlengkapan'];
$b = $_POST ['nama_perlengkapan'];
$c = $_POST ['id_admin'];

$query = mysql_query ("insert into perlengkapan (id_perlengkapan,nama_perlengkapan,id_admin)
values ('$a','$b','$c')");
 
if ($query)
{echo"<script>alert('Data Kode Perlengkapan = $a Sudah Tersimpan');window.location='Perlengkapan.php' ;</script>";}
else
{echo"<script>alert('Maaf data $a sudah ada');window.location='Perlengkapan.php' ;</script>";}
?>