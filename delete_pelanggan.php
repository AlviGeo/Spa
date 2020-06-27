<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("delete from pelanggan from pelanggan where id_pelanggan='$id'");
if($query)
{echo"<script>alert('Data telah dihapus');window.location='Pelanggan.php';</script>";}

?>