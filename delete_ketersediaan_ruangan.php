<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("delete from ketersediaan_ruangan where jumlah_ruangan_tersedia='$id'");
if($query)
{echo"<script>alert('Data telah dihapus');window.location='Ketersediaan_Ruangan.php';</script>";}

?>