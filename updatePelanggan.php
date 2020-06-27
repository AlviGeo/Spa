<?php
include("koneksi.php");
$A = $_POST['id_pelanggan'];
$B = $_POST['nama_pelanggan'];
$C = $_POST['no_tep'];

$query = mysql_query("update pelanggan set nama_pelanggan='$B',no_tep='$C' where id_pelanggan='$A'");
if($query)
{echo"<script>alert('Data berhasil di Update');window.location='Pelanggan1.php';</script>";}
else
{echo"<script>alert('Data tidak berhasil di Update');window.location='edit_pelanggan.php';</script>";}

?>