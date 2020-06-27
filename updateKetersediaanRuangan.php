<?php
include("koneksi.php");
$A = $_POST['jumlah_ruangan_tersedia'];
$B = $_POST['kode_ruang'];
$C = $_POST['total_ruangan_disediakan'];
$D = $_POST['id_admin'];

$query = mysql_query("update ketersediaan_ruangan set kode_ruang='$B',total_ruangan_disediakan='$C',id_admin='$D' where jumlah_ruangan_tersedia='$A'");
if($query)
{echo"<script>alert('Data berhasil di Update');window.location='Ketersediaan_Ruangan1.php';</script>";}
else
{echo"<script>alert('Data tidak berhasil di Update');window.location='edit_ketersediaan_ruangan.php';</script>";}

?>