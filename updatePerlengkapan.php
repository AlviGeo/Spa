<?php
include("koneksi.php");
$A = $_POST['id_perlengkapan'];
$B = $_POST['nama_perlengkapan'];
$C = $_POST['id_admin'];

$query = mysql_query("update perlengkapan set nama_perlengkapan='$B',id_admin='$C' where id_perlengkapan='$A'");
if($query)
{echo"<script>alert('Data berhasil di Update');window.location='Perlengkapan1.php';</script>";}
else
{echo"<script>alert('Data tidak berhasil di Update');window.location='edit_perlengkapan.php';</script>";}

?>