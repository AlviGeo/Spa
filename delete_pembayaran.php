<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("delete from pembayaran where id_pembayaran='$id'");
if($query)
{echo"<script>alert('Data telah dihapus');window.location='Pembayaran.php';</script>";}

?>